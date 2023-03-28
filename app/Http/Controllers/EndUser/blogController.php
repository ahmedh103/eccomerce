<?php

namespace App\Http\Controllers\EndUser;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\EndUser\BlogInterface;
use App\Http\Requests\EndUser\blog\StoreRequest;
use App\Http\Requests\EndUser\blog\UpdateRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class blogController extends Controller
{
    private $blogInterface;
    public function __construct(BlogInterface $blog)
    {
        $this->blogInterface = $blog;
    }

    public function index(){
        return $this->blogInterface->index();
    }
    public function create(){
        return $this->blogInterface->create();
    }

    public function store(StoreRequest $request , Article $blog){
        return $this->blogInterface->store($request ,$blog);
    }

    public function updateForm(Article $blog){
        return $this->blogInterface->updateForm($blog);
    }

    public function update(UpdateRequest $requset , Article $blog){
        return $this->blogInterface->update($requset , $blog);
    }
    public function search(Request $request){
        return $this->blogInterface->search($request);
    }
}
