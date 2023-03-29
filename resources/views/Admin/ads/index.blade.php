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
                            <th scope="col">City</th>
                            <th scope="col">Image</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Price</th>
                            <th scope="col">Description</th>
                            <th scope="col">Type</th>
                            <th scope="col">Status</th>
                            <th class="text-center" scope="col">Actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ads as $ad)
                            <tr>
                                <td>{{$ad->name}}</td>
                                <td>{{$ad->city}}</td>
                                <td><img src="{{ asset($ad->image) }}" width="100px" height="100px"></td>
                                <td>{{$ad->slug}}</td>
                                <td>{{$ad->price}}</td>
                                <td>{{$ad->description}}</td>
                                <td>{{$ad->type}}</td>
                                <td>{{$ad->status}}</td>
                                <td class="text-center">

                                    <div class="row-cols-2">
                                        <a href="{{ route('admin.ads.edit', $ad) }}" class="btn btn-info">Edit</a>
                                        <form style="display: inline-block" action="{{route('admin.ads.delete',$ad)}}" method="post">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>

                                    </div>

                                    <br>

                                    <div class="row-cols-2">
                                        <form style="display: inline-block" action="{{route('admin.ads.approve',$ad)}}" method="post">
                                            @csrf
                                            @method("PUT")
                                            <button type="submit" class="btn btn-success">Approve</button>
                                        </form>
                                        <form style="display: inline-block" action="{{route('admin.ads.reject',$ad)}}" method="post">
                                            @csrf
                                            @method("PUT")
                                            <button type="submit" class="btn btn-warning">Reject</button>
                                        </form>
                                    </div>

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
