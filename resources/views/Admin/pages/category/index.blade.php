@extends('Admin.includes.master')

@section('title')
    categories
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
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>{{__('dashboard.all_categories')}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">{{__('dashboard.name')}}</th>
                                            <th scope="col">{{__('dashboard.slug')}}</th>
                                            <th scope="col">{{__('dashboard.image')}}</th>
                                            <th class="text-center" scope="col">{{__('dashboard.action')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse ($categories as $key =>  $category)
                                            <tr>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->slug }}</td>
                                                <td><img src=" {{ $category->image }}" width="100px" height="100px"></td>
                                                <td class="text-center">

                                                        <span class="badge badge-light-success"><a 
                                                                href="{{ route('admin.category.edit', $category->id) }}">
                                                                {{__('dashboard.edit')}}</a></span>
                                                    <span class="badge badge-light-success">
                                                            <form  id="delete"
                                                                action="{{ route('admin.category.delete', $category->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <a href="javascript:void(0)" onclick="document.getElementById('delete').submit();"
                                                                       style="background-color: unset;border-color: transparent; "
                                                                       value="Delete">
                                                                       {{__('dashboard.delete')}}
                                                                </a>
                                                            </form>
                                                        </span>
                                                </td>
                                            </tr>
                                        @empty
                                            <h5>{{__('dashboard.no_data_found')}}</h5>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
