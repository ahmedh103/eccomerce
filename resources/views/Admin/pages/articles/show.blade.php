@extends('Admin.includes.master')

@section('title')
    {{ __('dashboard.home') }}
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-menu">
                                    <line x1="3" y1="12" x2="21" y2="12"></line>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <line x1="3" y1="18" x2="21" y2="18"></line>
                                </svg>
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
                <div class="row layout-top-spacing">
                    <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    {{--                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">--}}
                                    <a href="{{route('admin.article.index')}}" class="btn btn-primary">Back</a>
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlTextarea1">Title</label>
                                    <input type="text" class="form-control" name="title"
                                           value="{{$article->title}}" disabled>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" name="description"
                                              id="exampleFormControlTextarea1"
                                              rows="3" disabled>{{$article->description}}</textarea>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlTextarea1">Image</label>
                                    <img src="{{ $article->image }}" alt="" width="100px"
                                         height="100px">
                                </div>

                                <div class="form-group mb-4">
                                    <label for="exampleFormControlTextarea1">Author</label>
                                    <input type="text" class="form-control" name="author"
                                           value="{{$article->user->name}}" disabled>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlTextarea1">Created At</label>
                                    <input type="text" class="form-control" name="created_at"
                                           value="{{$article->created_at}}" disabled>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="exampleFormControlTextarea1">Status</label>
                                    <select class="form-control" name="status" id="exampleFormControlSelect1">
                                        <option value="1" {{$article->status == 1 ? 'selected' : ''}}>Approved
                                        </option>
                                        <option value="2" {{$article->status == 0 ? 'selected' : ''}}>Rejected
                                        </option>
                                    </select>
                                </div>
                                <form action="{{route('admin.article.changeStates',$article)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-primary mt-3">Change States</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
