@extends('Admin.includes.master')

@section('title')
    Create Ad
@endsection

@section('content')
    <div class="container" style="margin-top: 150px;">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h3 class="text-center text-danger"><b>Create new ad</b></h3>
                <div class="form-group">
                    <form action="{{route('admin.ads.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="name_en" class="form-control m-2" placeholder="Name">
                        @if ($errors->has('name_en'))
                            <span class="text-danger">{{ $errors->first('name_en') }}</span>
                        @endif

                        <input type="text" name="name_ar" class="form-control m-2" placeholder="الاســـم">
                        @if ($errors->has('name_ar'))
                            <span class="text-danger">{{ $errors->first('name_ar') }}</span>
                        @endif

                        <input type="text" name="city" class="form-control m-2" placeholder="City">
                        @if ($errors->has('city'))
                            <span class="text-danger">{{ $errors->first('city') }}</span>
                        @endif

                        <label class="m-2">Image</label>
                        <input type="file" name="image" id="input-file-now-custom-3" class="form-control m-2">

{{--                        <input type="text" name="category_id" class="form-control m-2" placeholder="Category Id">--}}
{{--                        @if ($errors->has('category_id'))--}}
{{--                            <span class="text-danger">{{ $errors->first('category_id') }}</span>--}}
{{--                        @endif--}}


                        <label for="exampleFormControlInput2">Category</label>
                        <select name="category_id" id="" class="form-control my-2">
                            <option value="">Select Category</option>
                            @foreach ( $categories as $category )
                                <option value="{{ $category->id }}" @selected('category_id')> {{$category->name}} </option>
                            @endforeach
                        </select>



                        <input type="text" name="price" class="form-control m-2" placeholder="Price">
                        @if ($errors->has('price'))
                            <span class="text-danger">{{ $errors->first('price') }}</span>
                        @endif

                        <input type="text" name="description_en" class="form-control m-2" placeholder="Description">
                        @if ($errors->has('description_en'))
                            <span class="text-danger">{{ $errors->first('description_en') }}</span>
                        @endif

                        <input type="text" name="description_ar" class="form-control m-2" placeholder="وصــف الاعــلان">
                        @if ($errors->has('description_ar'))
                            <span class="text-danger">{{ $errors->first('description_ar') }}</span>
                        @endif

{{--                        <input type="hidden" value="{{ $user->id }}" name="user_id">--}}

                        @php
                            $types = ['new','used'];
                        @endphp


                        <div class="input-group mb-4">
                            <select  required class="form-control" name="type">
                                <option>Select Ad Type</option>
                                @foreach($types as $type)
                                    <option value="{{$type}}">{{$type}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('type'))
                                <span class="text-danger">{{ $errors->first('type') }}</span>
                            @endif
                        </div>


                        <button type="submit" class="btn btn-danger mt-3 mb-5">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

