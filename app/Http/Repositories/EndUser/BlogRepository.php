<?php

namespace App\Http\Repositories\EndUser;

use App\Http\Traits\EndUser\BlogUserTrait;
use App\Http\Traits\ImageTrait;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogRepository implements \App\Http\Interfaces\EndUser\BlogInterface
{
    use BlogUserTrait,ImageTrait;
    private $articleModel;
    public function __construct(Article $article)
    {
        $this->articleModel = $article;
    }

    public function index()
    {
      return $this->showUserBlogs(\auth()->id());
    }

    public function create()
    {
        return view('EndUser.pages.blogs.create');
    }

    public function store($requset)
    {
        $imageName = $this->uploadImage($requset->image , $this->articleModel::PATH);
        $this->articleModel::create([
            'title'=>['en'=>$requset->name_en ,'ar'=>$requset->name_ar],
            'description'=>['en'=>$requset->desc_en ,'ar'=>$requset->desc_ar],
            'user_id'=>Auth::id(),
            'image'=>$imageName
        ]);
      toast(__('user.add'),'success');
        return redirect(route('blog.index'));
    }

    public function updateForm($blog)
    {
        return view('EndUser.pages.blogs.updateForm',['blog'=>$blog]);
    }

    public function update($requset, $blog)
    {
        if ($requset->image) {
            $imageName = $this->uploadImage($requset->image, $this->articleModel::PATH, $blog->getRawOriginal('image'));
        }
        $blog->update([
            'title'=>['en'=>$requset->name_en , 'ar'=>$requset->name_ar],
            'description'=>['en'=>$requset->desc_en ,'ar'=>$requset->desc_ar],
            'image' => $imageName ?? $blog->getRawOriginal('image'),
        ]);

        toast(  (__('user.edit')), 'success');
        return redirect(route('blog.index'));
    }

    public function search($request)
    {
         $keyResult = $this->articleModel::where('title','LIKE','%'.$request->search.'%')->get();
         return response()->json([
             'status' => 'success',
             'data' => $keyResult
         ]);

    }
}
