<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdInterface;
use App\Http\Traits\ImageTrait;
use App\Models\Ads;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use App\Http\Traits\CategoryTrait;
use Illuminate\Support\Facades\Auth;

class AdRepository implements AdInterface
{
    use ImageTrait , CategoryTrait;

    private $adModel;
    public function __construct(Ads $ad)
    {
        $this->adModel = $ad;
    }

    public function index()
    {

        $ads = $this->adModel::with(['category'])->get();
        return view('Admin.ads.index', compact('ads'));
    }

    public function store($request)
    {
//        dd(auth()->id());
        $imageName = $this->uploadImage($request->image, $this->adModel::PATH);
//        dd($request);
        $this->adModel::create([
            'name' => ['en' => $request->name_en , 'ar' => $request->name_ar],
            'city' => $request->city,
            'image' => $imageName,
            'category_id' => $request->category_id,
            'user_id' => auth()->id(),
            'price' => $request->price,
            'description' => ['en' => $request->description_en , 'ar' => $request->description_ar],
            'type' => $request->type,
            'status' => $this->adModel::APPROVED
        ]);
        toast('Ad created successfully', 'success');
        return redirect(route('admin.ads.index'));
    }

    public function create()
    {
//        $user = Auth::user();
        $categories =  $this->getCategoryBydepartment();
        return view('Admin.ads.create' ,compact('categories'));
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
        $this->removeImage($ad->image);
        toast('Ad Deleted Successfully', 'success');

        return redirect()->route('admin.ads.index');
    }

    public function approve($ad){

        $ad->update([
            'status' => $this->adModel::APPROVED
        ]);
        toast('Ad Approved Successfully', 'success');
        return redirect()->route('admin.ads.index');

    }

    public function reject($ad){

        //dd($ad);
        $ad->update([
            'status' => $this->adModel::REJECTED
        ]);

        //dd($ad);
        toast('Ad Rejected Successfully', 'success');
        return redirect()->route('admin.ads.index');
    }
}
