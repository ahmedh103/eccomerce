@extends('Admin/includes.master')

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
                                    <h4 class="text-center pt-3">Add Product</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form method="post" action="{{route('admin.product.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-4">


                                    <input type="text" class="form-control my-2" name="name_en" value="{{ old('name_en') }}" id="exampleFormControlInput2" placeholder="title">
                                    <input type="text" class="form-control my-2" name="name_ar" value="{{ old('name_ar') }}" id="exampleFormControlInput2" placeholder="title">

                                    <input type="number" class="form-control my-2" name="price" value="{{ old('price') }}" id="exampleFormControlInput2" placeholder="price">
                                    <input type="file" class="form-control my-2" name="image"  id="exampleFormControlInput2" placeholder="price">

                                    <textarea name="detalis_en" id="" class="form-control my-2  @error('desc') is-invalid @enderror" placeholder="Description" cols="30" rows="10"></textarea>
                                    <textarea name="detalis_ar" id="" class="form-control my-2 @error('desc') is-invalid @enderror" placeholder="Description" cols="30" rows="10"></textarea>

                                    <select name="category_id" id="" class="form-control my-2">
                                        <option value="">Select Category Menu</option>

                                            <option value="" @selected('category_id')></option>

                                    </select>
                                </div>
                                <input type="submit" class="mt-4 mb-4 btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection
