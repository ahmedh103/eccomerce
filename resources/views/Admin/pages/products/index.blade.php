@extends('Admin.includes.master')

@section('title')
    {{ __('dashboard.product') }}
@endsection
@section('content')


    <div class="row layout-top-spacing d-flex  align-items-center m-auto pt-5 ">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <h2 class="text-center">{{ __('dashboard.product') }}</h2>
            <div class="widget-content widget-content-area br-8">
                <table id="zero-config" class="table dt-table-hover" style="width:100%">
                    <thead>

                    <tr>
                        <th>{{ __('dashboard.name') }}</th>
                        <th>{{ __('dashboard.name') }}</th>
                        <th>{{ __('dashboard.detalis') }}</th>
                        <th>{{ __('dashboard.price') }}</th>
                        <th>{{ __('dashboard.image') }}</th>
                        <th>{{__('dashboard.category')}}</th>
                        <th class="no-content">{{ __('dashboard.action') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)

                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->slug}}</td>
                        <td>{{$product->detalis}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                            <img src="{{asset("storage/$product->image")}}" alt="" class="" style="width: 10%">
                        </td>
                        <td>{{$product->category->name}}</td>


                       <td>
                           <a href="{{route('admin.product.edit', $product)}}" class="btn btn-success">{{ __('dashboard.edit') }}</a>
                           <form action="{{route('admin.product.delete', $product)}}" method="POST" style="display: inline">
                               @method('DELETE')
                               @csrf
                               <button class="btn btn-danger">{{ __('dashboard.delete') }}</button>
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

    </div>

    <!--  BEGIN FOOTER  -->
    <div class="footer-wrapper mt-0">
        <div class="footer-section f-section-1">
            <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank" href="https://designreset.com/cork-admin/">DesignReset</a>, All rights reserved.</p>
        </div>
        <div class="footer-section f-section-2">
            <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
        </div>
    </div>
    <!--  END CONTENT AREA  -->
    </div>
    <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->


@endsection
