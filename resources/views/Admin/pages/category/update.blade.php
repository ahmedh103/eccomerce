@extends('Admin.includes.master')

@section('title')
    Edit Category
@endsection

@section('content')
    <div id="content" class="main-content">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Edit Category</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <form method="post" action="{{ route('admin.category.update', $category) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row mb-4">
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlInput2">{{__('dashboard.english_name')}}</label>
                                            <input type="text" class="form-control" name="name_en" value="{{$category->getTranslation('name','en')}}" id="exampleFormControlInput2" placeholder="English Name">
                                            @error('name_en')
                                            <div class="alert alert-danger mt-1" role="alert">
                                                <h4 class="alert-heading">Alert Danger</h4>
                                                <div class="alert-body">
                                                    {{ $message }}
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlInput2">{{__('dashboard.arabic_name')}}</label>
                                            <input type="text" class="form-control" name="name_ar" value="{{$category->getTranslation('name','ar')}}" id="exampleFormControlInput2" placeholder="Arabic Name">
                                            @error('name_ar')
                                            <div class="alert alert-danger mt-1" role="alert">
                                                <h4 class="alert-heading">Alert Danger</h4>
                                                <div class="alert-body">
                                                    {{ $message }}
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlInput2">{{__('dashboard.english_slug')}}</label>
                                            <input type="text" class="form-control" name="slug_en" value="{{$category->getTranslation('slug','en')}}" id="exampleFormControlInput2" placeholder="English  Slug">
                                            @error('slug_en')
                                            <div class="alert alert-danger mt-1" role="alert">
                                                <h4 class="alert-heading">Alert Danger</h4>
                                                <div class="alert-body">
                                                    {{ $message }}
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlInput2">{{__('dashboard.arabic_slug')}}</label>
                                            <input type="text" class="form-control" name="slug_ar" value="{{$category->getTranslation('slug','ar')}}" id="exampleFormControlInput2" placeholder="Arabic Slug">
                                            @error('slug_ar')
                                            <div class="alert alert-danger mt-1" role="alert">
                                                <h4 class="alert-heading">Alert Danger</h4>
                                                <div class="alert-body">
                                                    {{ $message }}
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class=" input-group mb-3 mt-4">
                                                <img src="{{$category->image}}" width="100px" height="100px">
                                                </div>
                                            <label for="exampleFormControlInput2">{{__('dashboard.image')}}</label>
                                            <input type="file" class="form-control" name="image"  id="exampleFormControlInput2" >
                                            @error('image')
                                            <div class="alert alert-danger mt-1" role="alert">
                                                <h4 class="alert-heading">Alert Danger</h4>
                                                <div class="alert-body">
                                                    {{ $message }}
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection







