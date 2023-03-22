@extends('Admin.includes.master')

@section('title')
   Add category
@endsection

@section('content')
    <div id="content" class="main-content">
        <div class="container">

            <div class="container">

                <!--  BEGIN BREADCRUMBS  -->
                <div class="secondary-nav">
                    <div class="breadcrumbs-container" data-page-heading="Analytics">
                        <header class="header navbar navbar-expand-sm">
                            <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                            </a>
                            <div class="d-flex breadcrumb-content">
                                <div class="page-header">

                                    <div class="page-title">
                                    </div>

                                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">Form</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Basic</li>
                                        </ol>
                                    </nav>

                                </div>
                            </div>
                        </header>
                    </div>
                </div>
                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Form controls</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.category.store') }}"  >
                                @csrf
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlInput2">{{__('dashboard.english_name')}}</label>
                                    <input type="text" class="form-control" name="name_en" value="{{ old('name_en') }}" id="exampleFormControlInput2" placeholder="English Name">
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
                                    <input type="text" class="form-control" name="name_ar" value="{{ old('name_ar') }}" id="exampleFormControlInput2" placeholder="Arabic Name">
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
                                    <select name="department_id" id="" class="form-control my-2">
                                        <option value="">Select Department</option>
                                        @foreach ( $departments as $department )
                                            <option value="{{ $department->id }}" @selected('department_id')> {{$department->name}} </option>
                                        @endforeach
                                    </select>
                                </div>








                                <div class="form-group mb-4">
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



                                
                                <input type="submit" class="mt-4 mb-4 btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>

        </div>
    </div>
@endsection
