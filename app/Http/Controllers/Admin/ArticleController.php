<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\ArticleInterface;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
	private $articleInterface;

	public function __construct(ArticleInterface $articleInterface)
	{
		$this->articleInterface = $articleInterface;
	}

	public function index()
	{
		return $this->articleInterface->index();
	}

	public function show(Article $article)
	{
		return $this->articleInterface->show($article);
	}

	public function changeStates(Article $article)
	{
		return $this->articleInterface->changeStates($article);
	}
}
