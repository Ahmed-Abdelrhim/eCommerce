@extends('layouts.admin')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">{{__('admin/index.Dashboard')}} </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="">{{__('admin/index.Dashboard')}}</a>
                                </li>
                                <li class="breadcrumb-item active"> {{__('admin/index.All Main Categories')}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{__('admin/index.All Main Categories')}} </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- Start Alers --}}
                                <div class="col-md-6 mx-auto">
                                    @include('dashboard.includes.alerts.success')
                                    @include('dashboard.includes.alerts.errors')
                                </div>
                                {{-- End Alers --}}
                                {{--Start Main Category--}}
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table
                                            class="table display nowrap table-striped table-bordered scroll-horizontal">
                                            {{--Start Table Head--}}
                                            <thead class="">
                                            <tr>
                                                <th>{{__('admin/index.Section')}} </th>
                                                <th> {{__('admin/index.Language')}}</th>
                                                @isset($type)<th> {{__('admin/index.Main Category')}} </th>@endisset
                                                <th>{{__('admin/index.Status')}}</th>
                                                <th>{{__('admin/index.Category Image')}}</th>
                                                <th>{{__('admin/index.Actions')}}</th>
                                            </tr>
                                            </thead>
                                            {{--End Table Head--}}
                                            {{--Start Table Head--}}
                                            <tbody>

                                            @isset($categories)
                                                @foreach($categories as $cat)
                                                    <tr>
                                                        <td>{{$cat->slug}}</td>
                                                        <td>{{$cat->is_translatable == 1 ? 'EN & AR' : 'EN'}}</td>
                                                        @isset($type)
                                                            <td>{{$cat->parent->slug }}</td>
                                                        @endisset
                                                        <td>{{$cat->is_active == true ? 'Active' : 'Not active'}}</td>
                                                        <td><img style="width: 150px; height: 100px;"
                                                                 src="{{asset('assets/images/categories/'.$cat->photo)}}">
                                                        </td>
                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                {{--Update Link--}}
                                                                <a href="{{route('view-update-category',$cat->id)}}"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">
                                                                    {{__('admin/index.Update')}}
                                                                </a>
                                                                {{--Delete Link--}}
                                                                <a href="{{route('delete-category',$cat->id)}}"
                                                                   class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">
                                                                    {{__('admin/index.Delete')}}
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            @endisset
                                            </tbody>
                                            {{--End Table Head--}}
                                        </table>
                                        <div class="justify-content-center d-flex">

                                        </div>
                                    </div>
                                </div>
                                {{--End Main Category--}}
                                {{--Start Sub Category--}}
                                {{--Start Sub Category--}}
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection


{{--@isset($products)--}}
{{--    @foreach($products as $product)--}}
{{--        <tr>--}}
{{--            <td class="table-dark">{{$product->id}}</td>--}}
{{--            <td class="table-dark">{{$product->name }}</td>--}}
{{--            <td class="table-dark ">--}}
{{--                <div class="btn-group actions " role="group"--}}
{{--                     aria-label="Basic example">--}}
{{--                    --}}{{--View Full Product --}}
{{--                    <div>--}}
{{--                        <a href="{{route('full-product',$product->id)}}"></a>--}}
{{--                    </div>--}}
{{--                    --}}{{--Update Link--}}
{{--                    <div>--}}
{{--                        <a href="{{route('update-product',$product->id)}}"--}}
{{--                           class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">--}}
{{--                            {{__('admin/index.Update')}}--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    --}}{{--Delete Link--}}
{{--                    <div>--}}
{{--                        <a href="{{route('delete-product',$product->id)}}"--}}
{{--                           class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">--}}
{{--                            {{__('admin/index.Delete')}}--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--@endisset--}}
