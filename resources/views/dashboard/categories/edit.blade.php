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
                                <li class="breadcrumb-item"><a href="">{{__('admin/index.Dashboard')}} </a>
                                </li>
                                <li class="breadcrumb-item"><a href=""> {{__('admin/index.Main Categories')}}</a>
                                </li>
                                <li class="breadcrumb-item active"> {{__('admin/index.Update')}}
                                </li>
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
                                        id="basic-layout-form">{{__('admin/index.Edit Main Category')}} </h4>
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
                                              action="{{route('update-category',$category->id)}}"
                                              method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <input name="id" value="{{$category->id}}" type="hidden">
                                            {{--Start Category Old Image  --}}
                                            <div class="form-group">
                                                <div class="text-center">
                                                    <img src="{{asset('assets/images/categories/'.$category->photo)}}"
                                                         class="  height-150"
                                                         alt="category has no image">
                                                </div>
                                            </div>

                                            {{-- End Category Old Image --}}
                                            {{--Start Category New Image  --}}
                                            <div class="form-group">
                                                <label> {{__('admin/index.Update Category Image')}} </label>
                                                <br>
                                                <label id="projectinput7" class="file center-block">
                                                    <input type="file" id="file" name="image">
                                                    <span class="file-custom"></span>
                                                </label>
                                                @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            {{--End Category New Image  --}}
                                            {{-- Start Category Data--}}
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i>
                                                    {{__('admin/index.Category Data')}}
                                                </h4>
                                                {{-- Start Category Slug And Name In Translations Table  --}}
                                                <div class="row">
                                                    {{-- Start Category Slug --}}
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label
                                                                for="projectinput1">{{__('admin/index.Category Slug')}}</label>
                                                            <input type="text" id="name" class="form-control"
                                                                   placeholder="  " value="{{$category->slug}}"
                                                                   name="slug">
                                                            @error('slug')
                                                            <span
                                                                class="text-danger">{{__('admin/index.This Field Is Required')}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    {{--End Category Slug  --}}
                                                    {{--Start Category Name In Translations Table  --}}
                                                    {{--If Has Translation --}}
                                                    @isset($name)
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label
                                                                    for="projectinput1">{{__('admin/index.Category Name In Translation Table')}}</label>
                                                                <input type="text" id="nameTrans" class="form-control"
                                                                       value="{{$name}}"
                                                                       name="name">
                                                                @error('name')
                                                                <span
                                                                    class="text-danger">{{__('admin/index.This Field Is Required')}} </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    @endisset
                                                    {{--If Has No Translation--}}
                                                    @if(!isset($name))
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label
                                                                    for="projectinput1">{{__('admin/sidebar.ADD Translation To This Category (If Needed)')}}</label>
                                                                <input type="text" id="nameTrans" class="form-control"
                                                                       value=""
                                                                       placeholder="{{__('admin/index.No-Translation Till Now')}}"
                                                                       name="name">
                                                                @error('name')
                                                                <span
                                                                    class="text-danger">{{__('admin/index.This Field Is Required')}} </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    @endif
                                                    {{--End Category Name In Translations Table  --}}
                                                </div>
                                                {{--End Category Slug And Name In Translations Table   --}}
                                                {{--Start Category Status --}}
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox" value="1" name="status"
                                                                   id="switcheryColor4" class="switchery"
                                                                   data-color="success"
                                                                   @if($category->is_active ==1) checked @endif/>
                                                            {{--@if ($mainCategory->active == 1) checked @endif--}}
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
                                                    <i class="la la-check-square-o"></i> {{__('admin/index.Update')}}
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



