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
                                {{--End Alerts Includes--}}
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form"
                                              action="#"
                                              method="POST" enctype="multipart/form-data">
                                            @csrf
                                            {{--<input name="id" value="" type="hidden">--}}
                                            {{-- Start Category Data--}}
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i>
                                                    {{__('admin/index.Product Data')}}
                                                </h4>
                                                {{-- Start Product Slug And Name , Description , Short Description In Translations Table  --}}
                                                <div class="row">
                                                    {{--##################################################################################--}}
                                                    {{-- Start Product Slug --}}
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label
                                                                for="projectinput1">{{__('admin/index.Add Product Slug')}}</label>
                                                            <input type="text" id="name" class="form-control"
                                                                   placeholder="" value="{{old('slug')}}"
                                                                   name="slug">
                                                            @error('slug')
                                                            <span
                                                                class="text-danger">{{__('admin/index.This Field Is Required')}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    {{--End Product Slug  --}}
                                                    {{--Start Product Name In Translations Table  --}}
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label
                                                                for="projectinput1">{{__('admin/index.Add Product Name In Translation Table')}}</label>
                                                            <input type="text" id="nameTrans" class="form-control"
                                                                   value="{{old('name')}}"
                                                                   name="name">
                                                            @error('name')
                                                            <span
                                                                class="text-danger">{{__('admin/index.This Field Is Required')}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    {{--End Product Name In Translations Table  --}}
                                                    {{--Start Product Description In Translations Table  --}}
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label
                                                                for="projectinput1">{{__('admin/index.Add Product Description In Translation Table')}}</label>
                                                            <input type="text" id="nameTrans" class="form-control"
                                                                   value="{{old('description')}}"
                                                                   name="description">
                                                            @error('description')
                                                            <span
                                                                class="text-danger">{{__('admin/index.This Field Is Required')}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    {{--End Product Description In Translations Table  --}}
                                                    {{--Start Product Short Description In Translations Table  --}}
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label
                                                                for="projectinput1">{{__('admin/index.Add Product Short Description In Translation Table')}}</label>
                                                            <input type="text" id="nameTrans" class="form-control"
                                                                   value="{{old('short_description')}}"
                                                                   name="short_description">
                                                            @error('short_description')
                                                            <span
                                                                class="text-danger">{{__('admin/index.This Field Is Required')}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    {{--End Product Short Description In Translations Table  --}}
                                                    {{--##################################################################################--}}
                                                    {{--Start Product Category dropdown--}}
                                                    @isset($data['categories'])
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    for="projectinput2"> {{__('admin/index.Product Category')}} </label>
                                                                <select name="categories" class="select2 form-control"
                                                                        multiple>
                                                                    <optgroup
                                                                        label="{{__('admin/index.Open this select menu')}}">

                                                                        @foreach ($data['categories'] as $cat)
                                                                            <option value="{{ $cat->id }}">
                                                                                {{$cat->slug}}
                                                                            </option>
                                                                        @endforeach
                                                                    </optgroup>
                                                                </select>
                                                                @error('categories')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    @endisset
                                                    {{--End Product Category dropdown--}}
                                                    {{--Start Product Brand dropdown--}}
                                                    @isset($data['brands'])
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    for="projectinput2"> {{__('admin/index.Product Brand')}} </label>
                                                                <select name="brands" class="select2 form-control"
                                                                >
                                                                    <optgroup
                                                                        label="{{__('admin/index.Open this select menu')}}">

                                                                        @foreach ($data['brands'] as $brand)
                                                                            <option value="{{ $brand->id }}">
                                                                                {{$brand->name}}
                                                                            </option>
                                                                        @endforeach
                                                                    </optgroup>
                                                                </select>
                                                                @error('brands')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    @endisset
                                                    {{--End Product Brand dropdown--}}
                                                </div>
                                                {{-- End Product Slug And Name , Description , Short Description In Translations Table  --}}
                                                {{--Start Category Status --}}
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox" value="1" name="status"
                                                                   id="switcheryColor4" class="switchery"
                                                                   checked data-color="success"/>
                                                            <label for="switcheryColor4"
                                                                   class="card-title ml-1">{{__('admin/index.Status')}}
                                                            </label>

                                                            @error('status')
                                                            <span class="text-danger"> </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                {{--End Category Status --}}
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
