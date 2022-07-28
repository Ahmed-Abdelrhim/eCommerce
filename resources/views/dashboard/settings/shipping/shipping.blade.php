@extends('layouts.admin')
@section('content')
    <div class="container mt-5" style="background-color: #fff; margin-bottom: 345px">
        <div class="card-content collapse show">
            <div class="card-body">
                @include('dashboard.includes.alerts.success')
                <form class="form" method="POST" action="{{route('edit.shipping.methods',$shippingMethod->id)}}"
                      enctype="multipart/form-data">
                    <input type="hidden" value="" id="latitude" name="latitude">
                    <input type="hidden" value="" id="longitude" name="longitude">
                    <input type="hidden" value="{{$shippingMethod->id}}" id="id" name="id">
                    @csrf
                    @method('PUT')
                    <div class="form-body">
                        {{--Shipping Method--}}
                        <div class="row">
                            <div class=" col-xl-6 col-lg-6 col-md-6 ">
                                <div class="form-group">
                                    <label for="projectinput1"> Shipping Method </label>
                                    <input type="text" id="pac-input" class="form-control"
                                           value="{{$shippingMethod->value}}" name="key">

                                    @error('key')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        {{--Cost Method--}}
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="projectinput1"> Cost </label>
                                    <input type="number" id="pac-input" class="form-control"
                                           value="{{$shippingMethod['plain_value']}}" name="cost">

                                    @error('cost')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        {{--Start Status--}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mt-1">
                                    <input type="checkbox" value="1" name="active"
                                           id="switcheryColor4" class="switchery"
                                           data-color="success" checked/>
                                    <label for="switcheryColor4" class="card-title ml-1">Status
                                    </label>

                                    @error('active')
                                    <span class="text-danger"> </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div>
                    {{--End Status--}}
                    {{--<div id="map" style="height: 500px;width: 1000px;"></div>--}}
                    {{--Start Form Actions--}}
                    <div class="form-actions">
                        <button type="button" class="btn btn-warning mr-1"
                                onclick="history.back();">
                            <i class="ft-x"></i> {{__('admin/index.Cancel')}}
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="la la-check-square-o"></i> {{__('admin/index.Submit')}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop


