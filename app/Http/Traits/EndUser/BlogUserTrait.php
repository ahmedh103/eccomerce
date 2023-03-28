<?php

namespace App\Http\Traits\EndUser;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

trait BlogUserTrait
{
    public function showBlog(){

        $blogs = Article::get(['title','description','image','slug','user_id','created_at']);
       return view('EndUser.pages.blogs.blog_list',['blogs'=>$blogs]);


    }
}
