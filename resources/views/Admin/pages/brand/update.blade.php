@extends('Admin.includes.master')

@section('title')
    Edit Brand
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

                                <form method="post" action="{{ route('admin.brand.update', $brand) }}" >
                                    @csrf
                                    @method('PUT')
                                    <div class="row mb-4">
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlInput2">{{__('dashboard.english_name')}}</label>
                                            <input type="text" class="form-control" name="name_en" value="{{$brand->getTranslation('name','en')}}" id="exampleFormControlInput2" placeholder="English Name">
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
                                            <input type="text" class="form-control" name="name_ar" value="{{$brand->getTranslation('name','ar')}}" id="exampleFormControlInput2" placeholder="Arabic Name">
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
                                            <label for="exampleFormControlInput2">dashboard Name</label>
                                            <select name="category[]" id="" class="select2-container-multi form-control my-2" multiple>
                                                @foreach ($categories as $category )
                                                    <option value="{{ $category->id }}" {{ old('category') || in_array($category->id, $brand->categories->pluck('id')->toArray()) ? 'selected' : '' }}> {{$category->name}} </option>
                                                @endforeach
                                            </select>
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







