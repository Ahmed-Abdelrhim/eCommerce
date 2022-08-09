@extends('layouts.admin')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            {{-- Start Headlines --}}
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="{{route('dashboard')}}">{{__('admin/index.Dashboard')}} </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#"> {{__('admin/index.ADD')}}</a>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            {{--End Headlines  --}}
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"
                                        id="basic-layout-form">{{__('admin/index.Add Product')}} </h4>
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
                                {{--Start Alerts Includes--}}
                                <div class="col-8 mx-auto">
                                    @include('dashboard.includes.alerts.success')
                                    @include('dashboard.includes.alerts.errors')
                                </div>
                                @include('dashboard.includes.alerts.errors')
                                {{--End Alerts Includes--}}
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form"
                                              action="{{route('store-general-product-info')}}"
                                              method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input name="id" value="" type="hidden">
                                            {{-- Start Category Data--}}
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i>
                                                    {{__('admin/index.Product Data')}}
                                                </h4>
                                                {{-- Start Product Slug And Name , Description , Short Description In Translations Table  --}}
                                                <div class="row">
                                                    {{-- Start Product Price --}}
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label
                                                                for="projectinput1">{{__('admin/index.Add Product Price')}}</label>
                                                            <input type="number" id="name" class="form-control"
                                                                   placeholder="" value="{{old('slug')}}"
                                                                   name="price">
                                                            @error('price')
                                                            <span
                                                                class="text-danger">{{__('admin/index.This Field Is Required')}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    {{--End Product Price  --}}




                                                    {{--Start Product Special_price  --}}
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label
                                                                for="projectinput1">{{__('admin/index.Add Product Special_price ')}}</label>
                                                            <input type="text" id="name" class="form-control"
                                                                   value="{{old('special_price')}}"
                                                                   name="special_price">
                                                            @error('special_price')
                                                            <span
                                                                class="text-danger">{{__('admin/index.This Field Is Required')}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    {{--End Product Special_price  --}}









                                                    {{--Start Product Special_price_Start  --}}
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label
                                                                for="projectinput1">{{__('admin/index.Add Product Special_price_start')}}</label>
                                                            <input type="date" id="nameTrans" class="form-control"
                                                                   value="{{old('special_price_start')}}"
                                                                   name="description">
                                                            @error('special_price_start')
                                                            <span
                                                                class="text-danger">{{__('admin/index.This Field Is Required')}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    {{--End Product Special_price_start  --}}







                                                    {{--Start Product special_price_end  --}}
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label
                                                                for="projectinput1">{{__('admin/index.Add Product Special_price_end')}}</label>
                                                            <input type="date" id="nameTrans" class="form-control"
                                                                   value="{{old('special_price_end')}}"
                                                                   name="special_price_end">
                                                            @error('special_price_end')
                                                            <span
                                                                class="text-danger">{{__('admin/index.This Field Is Required')}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    {{--End Product special_price_end  --}}


                                                    {{--Start Product Selling_price  --}}
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label
                                                                for="projectinput1">{{__('admin/index.Add Product selling_price')}}</label>
                                                            <input type="number" id="nameTrans" class="form-control"
                                                                   value="{{old('selling_price')}}"
                                                                   name="selling_price">
                                                            @error('selling_price')
                                                            <span
                                                                class="text-danger">{{__('admin/index.This Field Is Required')}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    {{--End Product Selling_price  --}}
                                                    {{--##################################################################################--}}
                                                </div>
                                            </div>
                                            {{--End Category Data --}}
                                            {{-- Start Category Actions--}}
                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> {{__('admin/index.Cancel')}}
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> {{__('admin/index.Add')}}
                                                </button>
                                            </div>
                                            {{--End Category Actions --}}





                                        </form>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link" href="{{route('products-general-info')}}">Previous</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>

                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>

@endsection
