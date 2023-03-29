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
        return redirect(route('endUser.blog.index'));
    }

    public function search()
    {
        $search_content = $_GET['search_content'];
         $blogs = $this->articleModel::where('title','LIKE','%'.$search_content.'%')->get();
         $outPut = '';
         foreach ($blogs as $blog){
             $outPut.= '
                 <div class="blog-content">
                    <a href="#" class="blog-avatar">
                        <img src="'.$blog->image.'" alt="avatar">
                    </a>
                    <ul class="blog-meta">
                        <li>
                            <i class="fas fa-user"></i>
                            <p><a href="#">karim</a></p>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <p>2023-03-27 15:22:45</p>
                        </li>
                    </ul>
                    <div class="blog-text">
                        <h4><a href="blog-details.html">'.$blog->title.'</a></h4>
                        <p>'.$blog->description.'</p>
                    </div>
                    <a href="http://127.0.0.1:8000/ar/blog/updateForm/karim" class="blog-read">
                        <span>للتعديل اضغط هنا</span>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                  </div>
             ';
         }
         return $data = array(
             'row_result'=>$outPut,
         );

    }
}
