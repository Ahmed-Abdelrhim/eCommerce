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
                                        href="{{ route('dashboard') }}">{{ __('admin/index.Dashboard') }} </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#"> {{ __('admin/index.ADD') }}</a>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Headlines --}}
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"
                                        id="basic-layout-form">{{ __('admin/index.Add Product') }} </h4>
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
                                {{-- Start Alerts Includes --}}
                                <div class="col-8 mx-auto">
                                    @include('dashboard.includes.alerts.success')
                                    @include('dashboard.includes.alerts.errors')
                                </div>
                                {{-- End Alerts Includes --}}
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form" action="{{ route('store-product-info') }}"
                                              method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input name="id" value="" type="hidden">
                                            {{-- Start Category Data --}}
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i>
                                                    {{ __('admin/index.Product Data') }}
                                                </h4>
                                                {{-- Start Product First Data --}}
                                                {{-- ################################################################################## --}}
                                                <div class="first-product-data" id="first_data">
                                                    {{-- Start Product Slug And Name , Description , Short Description In Translations Table --}}
                                                    <div class="row">
                                                        {{-- Start Product Slug --}}
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label
                                                                    for="projectinput1">{{ __('admin/index.Add Product Slug') }}</label>
                                                                <input type="text" id="name" class="form-control"
                                                                       placeholder="" value="{{ old('slug') }}"
                                                                       name="slug">
                                                                @error('slug')
                                                                <span
                                                                    class="text-danger">{{ __('admin/index.This Field Is Required') }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        {{-- End Product Slug --}}
                                                        {{-- Start Product Name In Translations Table --}}
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label
                                                                    for="projectinput1">{{ __('admin/index.Add Product Name In Translation Table') }}</label>
                                                                <input type="text" id="name" class="form-control"
                                                                       value="{{ old('name') }}" name="name">
                                                                @error('name')
                                                                <span
                                                                    class="text-danger">{{ __('admin/index.This Field Is Required') }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        {{-- End Product Name In Translations Table --}}
                                                        {{-- Start Product Description In Translations Table --}}
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label
                                                                    for="projectinput1">{{ __('admin/index.Add Product Description In Translation Table') }}</label>
                                                                <input type="text" id="nameTrans" class="form-control"
                                                                       name="description" value="{{old('description')}}">
                                                                @error('description')
                                                                <span
                                                                    class="text-danger">{{ __('admin/index.This Field Is Required') }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        {{-- End Product Description In Translations Table --}}
                                                        {{-- Start Product Short Description In Translations Table --}}
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label
                                                                    for="projectinput1">{{ __('admin/index.Add Product Short Description In Translation Table') }}</label>
                                                                <input type="text" id="nameTrans" class="form-control"
                                                                       value="{{ old('short_description') }}"
                                                                       name="short_description">
                                                                @error('short_description')
                                                                <span
                                                                    class="text-danger">{{ __('admin/index.This Field Is Required') }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        {{-- End Product Short Description In Translations Table --}}
                                                        {{-- Start Product Category dropdown --}}
                                                        @isset($data['categories'])
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput2">
                                                                        {{ __('admin/index.Product Category') }} </label>
                                                                    <select name="categories[]"
                                                                            class="select2 form-control"
                                                                            multiple style="width: 100%" >
                                                                        <optgroup
                                                                            label="{{ __('admin/index.Open this select menu') }}" >

                                                                            @foreach ($data['categories'] as $cat)
                                                                                <option value="{{ $cat->id }}">
                                                                                    {{ $cat->slug }}
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
                                                        {{-- End Product Category dropdown --}}
                                                        {{-- Start Product Brand dropdown --}}
                                                        @isset($data['brands'])
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput2">
                                                                        {{ __('admin/index.Product Brand') }} </label>
                                                                    <select name="brand_id"
                                                                            class="select2 form-control" style="width: 100%">
                                                                        <optgroup
                                                                            label="{{ __('admin/index.Open this select menu') }}">

                                                                            @foreach ($data['brands'] as $brand)
                                                                                <option value="{{ $brand->id }}">
                                                                                    {{ $brand->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </optgroup>
                                                                    </select>
                                                                    @error('brand_id')
                                                                    <span class="text-danger"> {{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                        @endisset
                                                        {{-- End Product Brand dropdown --}}
                                                    </div>
                                                    {{-- End Product Slug And Name , Description , Short Description In Translations Table --}}
                                                    {{-- Start Category Status --}}
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group mt-1">
                                                                <input type="checkbox" name="is_active"
                                                                       id="switcheryColor4" class="switchery" checked
                                                                       data-color="success"/>
                                                                <label for="switcheryColor4"
                                                                       class="card-title ml-1">{{ __('admin/index.Status') }}
                                                                </label>

                                                                @error('is_active')
                                                                <span class="text-danger"> </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- End Category Status --}}
                                                </div>
                                                {{-- End Product First Data --}}
                                                {{-- ################################################################################## --}}


                                                {{-- <div class="btn btn-ouline-dark next mx-auto " id="next_first">Product Price Data</div>--}}


                                                {{-- ################################################################################## --}}
                                                {{-- Start Product Price Data --}}
                                                <div class="product-price-data " id="second">
                                                    <h4 class="form-section">
                                                        {{ __('admin/index.Product Price') }}
                                                    </h4>
                                                    <div class="row">
                                                        {{-- Start Product Price --}}
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label
                                                                    for="projectinput1">{{ __('admin/index.Add Product Price') }}</label>
                                                                <input type="number" id="name" class="form-control"
                                                                       placeholder="" value="{{ old('price') }}"
                                                                       name="price">
                                                                @error('price')
                                                                <span
                                                                    class="text-danger">{{ __('admin/index.This Field Is Required') }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        {{-- End Product Price --}}

                                                        {{-- Start Product Special_price --}}
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label
                                                                    for="projectinput1">{{ __('admin/index.Add Product Special_price ') }}</label>
                                                                <input type="text" id="name" class="form-control"
                                                                       value="{{ old('special_price') }}"
                                                                       name="special_price">
                                                                @error('special_price')
                                                                <span
                                                                    class="text-danger">{{ __('admin/index.This Field Is Required') }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        {{-- End Product Special_price --}}


                                                        {{-- Start Product Special_price_Start date --}}
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label
                                                                    for="projectinput1">
                                                                    <i class="la-calendar-times-o"></i>
                                                                    {{ __('admin/index.Add Product Special_price_start') }}

                                                                </label>
                                                                <input type="date" id="nameTrans" class="form-control "
                                                                       value="{{   date('y-m-d') }}"
                                                                       name="special_price_start">
                                                                @error('special_price_start')
                                                                <span
                                                                    class="text-danger">{{ __('admin/index.This Field Is Required') }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        {{-- End Product Special_price_start date--}}

                                                        {{-- Start Product special_price_end date --}}
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label
                                                                    for="projectinput1">{{ __('admin/index.Add Product Special_price_end') }}</label>
                                                                <input type="date" id="nameTrans" class="form-control"
                                                                       value="{{ date('y-m-d') }}"
                                                                       name="special_price_end">
                                                                @error('special_price_end')
                                                                <span
                                                                    class="text-danger">{{ __('admin/index.This Field Is Required') }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        {{-- End Product special_price_end date --}}


                                                        {{-- Start Product Selling_price --}}
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label
                                                                    for="projectinput1">{{ __('admin/index.Add Product selling_price') }}</label>
                                                                <input type="number" id="nameTrans" class="form-control"
                                                                       value="{{ old('selling_price') }}"
                                                                       name="selling_price">
                                                                @error('selling_price')
                                                                <span
                                                                    class="text-danger">{{ __('admin/index.This Field Is Required') }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        {{-- End Product Selling_price --}}
                                                    </div>
                                                    {{--                                                    <div class="btn btn-outline-dark next mx-auto" id="next_second">--}}
                                                    {{--                                                        Product Inventory Data</div>--}}
                                                </div>
                                                {{-- End Product Price Data --}}
                                                {{-- ################################################################################## --}}

                                                {{-- ################################################################################## --}}
                                                {{-- Start Product Stock Data --}}
                                                <div id="product_inventory" class="product-inventory-data  col-12">
                                                    <h4 class="form-section">
                                                        {{ __('admin/index.Product Stock Data') }}
                                                    </h4>
                                                    <div class="row">
                                                        {{-- Start Product Sku --}}
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label
                                                                    for="projectinput1">{{ __('admin/index.Add Product Sku') }}</label>
                                                                <input type="number" id="name" class="form-control"
                                                                       placeholder="" value="{{ old('sku') }}"
                                                                       name="sku">
                                                                @error('sku')
                                                                <span
                                                                    class="text-danger">{{ __('admin/index.This Field Is Required') }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        {{-- End Product Sku --}}

                                                        {{-- Start Product Manage Stock --}}
                                                        <div class="col-md-6 col-sm-12 ">
                                                            <div class="form-group">
                                                                <label
                                                                    for="projectinput1">{{ __('admin/index.Manage Stock') }}</label>
                                                                <select name="manage_stock"
                                                                        class=" select2 form-control"
                                                                        style="width: 100%">
                                                                    <optgroup
                                                                        label="{{ __('admin/index.Manage Stock') }}">
                                                                        <option value="1">Allow Tracking</option>
                                                                        <option value="0" selected>Don't Allow
                                                                            Tracking
                                                                        </option>
                                                                    </optgroup>
                                                                </select>
                                                                @error('manage_stock')
                                                                <span
                                                                    class="text-danger">{{ __('admin/index.This Field Is Required') }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        {{-- End Product Manage Stock --}}

                                                        {{-- Start Product In_stock --}}
                                                        <div class="col-md-6 ">
                                                            <div class="form-group">
                                                                <label
                                                                    for="projectinput2">{{ __('admin/index.In Stock') }}</label>
                                                                <select name="in_stock" class="select2 form-control"
                                                                        style="width: 100%">
                                                                    <optgroup
                                                                        label="{{ __('admin/index.Product Availability') }}">
                                                                        <option value="1">Available</option>
                                                                        <option value="0" selected>Not Available
                                                                        </option>
                                                                    </optgroup>
                                                                </select>

                                                                @error('in_stock')
                                                                <span
                                                                    class="text-danger">{{ __('admin/index.This Field Is Required') }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        {{-- End Product In_stock --}}

                                                        {{-- Start Product Qty --}}
                                                        <div class="col-md-6 col-sm-12 ">
                                                            <div class="form-group">
                                                                <label
                                                                    for="projectinput1">{{ __('admin/index.Product Quantity') }}</label>
                                                                <input type="number" id="qty"
                                                                       class="form-control disabled"
                                                                       placeholder="" value="{{ old('qty') }} "
                                                                       name="qty">
                                                                @error('qty')
                                                                <span
                                                                    class="text-danger">{{ __('admin/index.This Field Is Required') }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        {{-- End Product Qty --}}
                                                    </div>
                                                </div>
                                                {{-- End Product Stock Data --}}
                                                {{-- ################################################################################## --}}

                                            </div>
                                            {{-- End Form Body --}}

                                            {{-- Start Product Actions --}}
                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> {{ __('admin/index.Cancel') }}
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> {{ __('admin/index.Add') }}
                                                </button>
                                            </div>
                                            {{-- End Product Actions --}}

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

@section('script')
    <script>
        // let btn = document.getElementById('next_first');
        // let btnSecond = document.getElementById('next_second');
        // let productSecondData = document.getElementById('second');
        // let product_inventory = document.getElementById('product_inventory');
        // btn.addEventListener('click', function() {
        //     productSecondData.classList.toggle('hidden');
        //     if (productSecondData.classList.contains('hidden')) {
        //         btn.innerText = 'Product Price Data ';
        //         product_inventory.classList.add('hidden');
        //     } else {
        //         btn.innerText = 'previous';
        //     }
        // });
        //
        // btnSecond.addEventListener('click', function() {
        //     product_inventory.classList.toggle('hidden');
        //     if (product_inventory.classList.contains('hidden')) {
        //         btnSecond.innerText = 'Product Inventory Data ';
        //     } else {
        //         btnSecond.innerText = 'previous';
        //     }
        // });
    </script>
@stop
