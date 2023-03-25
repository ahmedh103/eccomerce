<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\ArticleInterface;
use App\Models\Article;
use function toast;
use function view;

class ArticleRepository implements ArticleInterface
{
	private $article;

	public function __construct(Article $article)
	{
		$this->article = $article;
	}

	public function index()
	{
		$articles = $this->article->get(['id', 'title', 'description', 'image', 'status']);
		return view('admin.pages.articles.index', compact('articles'));
	}

	public function show($article)
	{
		return view('admin.pages.articles.show', compact('article'));
	}

	public function changeStates($article)
	{
		$article->update(['status' => $article->status == 1 ? 0 : 1]);
		toast('Done', 'success');
		return redirect()->route('admin.article.index');
	}

}