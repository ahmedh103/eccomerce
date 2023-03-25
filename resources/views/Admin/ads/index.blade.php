@extends('Admin.includes.master')

@section('title')
   Ads
@endsection

@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="middle-content container-xxl p-0 mt-4">


                <button class="btn btn-primary mb-2 me-4">
                    <a href="{{route('admin.ads.create')}}" style="color: white">
                        {{ __('Add New')}}
                    </a>
                </button>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">City</th>
                            <th scope="col">Image</th>
                            <th class="text-center" scope="col">Actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ads as $ad)
                            <tr>
                                <td>{{$ad->name}}</td>
                                <td>{{$ad->slug}}</td>
                                <td>{{$ad->city}}</td>
                                <td><img src="{{ asset($ad->image) }}" width="100px" height="100px"></td>
                                <td class="text-center">
                                    <a href="{{ route('admin.ads.edit', $ad) }}" class="btn btn-primary">Edit</a>
                                    <form style="display: inline-block" action="{{route('admin.ads.delete',$ad)}}" method="post">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
