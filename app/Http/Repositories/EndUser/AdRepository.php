<?php

namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\AdInterface;
use App\Http\Interfaces\EndUser\AuthInterface;
use App\Http\Traits\CategoryTrait;
use App\Http\Traits\ImageTrait;
use App\Models\Ads;
use App\Models\Group;
use App\Models\User;
use App\Traits\AuthTrait;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdRepository implements AdInterface{
    use ImageTrait , CategoryTrait;

    private $adModel;
    public function __construct(Ads $ad)
    {
        $this->adModel = $ad;
    }

    public function index()
    {
        $ads = $this->adModel::with('category')->get(['id', 'name', 'city', 'image', 'slug', 'price','category_id' ,'description', 'type', 'status', 'created_at']);
        return view('EndUser.pages.ads.show', compact('ads'));
    }
}









