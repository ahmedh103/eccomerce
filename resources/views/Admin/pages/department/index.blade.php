@extends('Admin.includes.master')

@section('title')
Departments
@endsection

@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0 mt-4">



            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">image</th>
                            <th scope="col">Update</th>
                            <th scope="col">delate</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($departments as $department)
                        <tr>
                            <td>{{$department->name}}</td>
                            <td>{{$department->slug}}</td>
                            <td><img src="{{ $department->image}}" width="100px" height="100px"></td>
                            <td><a href="{{ route('admin.department.updateForm',$department) }}"
                                    class="btn btn-primary">Edit</a></td>
                            <td class="text-center">

                                <form style="display: inline-block"
                                    action="{{ route('admin.department.delete',$department) }}" method="post">
                                    @csrf
                                    @method('delete')
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
