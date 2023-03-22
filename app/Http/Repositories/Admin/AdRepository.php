<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdInterface;
use App\Http\Traits\ImageTrait;
use App\Models\Ads;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class AdRepository implements AdInterface
{
    use ImageTrait;

    private $adModel;
    public function __construct(Ads $ad)
    {
        $this->adModel = $ad;
    }

    public function index()
    {
        $ads = $this->adModel::get(['id','name','city','image','slug']);
        return view('Admin.ads.index', compact('ads'));
    }

    public function store($request)
    {
        $imageName = $this->uploadImage($request->image, $this->adModel::PATH);
        $this->adModel::create([
            'name' => ['en' => $request->name_en , 'ar' => $request->name_ar],
            'city' => $request->city,
            'image' => $imageName
        ]);
        toast('Ad created successfully', 'success');
        return redirect(route('admin.ads.index'));
    }

    public function create()
    {
        return view('Admin.ads.create');
    }

    public function edit($ad)
    {
        return view('Admin.ads.edit' , compact('ad'));
    }

    public function update($ad, $request)
    {
        if ($request->image) {
            $imageName = $this->uploadImage($request->image, $this->adModel::PATH, $ad->getRawOriginal('image'));
        }

        $ad->update([
            'name' => ['en' => $request->name_en , 'ar' => $request->name_ar],
            'city' => $request->city,
            'image' => $imageName ?? $ad->getRawOriginal('image'),
        ]);
        toast('Ad Updated Successfully', 'success');
        return redirect()->route('admin.ads.index');
    }

    public function delete($ad)
    {
        $ad->delete();
        toast('Ad Deleted Successfully', 'success');

        return redirect()->route('admin.ads.index');
    }
}
