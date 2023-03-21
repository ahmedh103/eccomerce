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

                        <button type="submit" class="btn btn-danger mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

