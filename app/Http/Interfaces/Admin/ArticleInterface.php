<?php

namespace App\Http\Interfaces\Admin;

use App\Models\Article;

interface ArticleInterface
{
	public function index();

	public function show($article);

	public function changeStates($article);

}