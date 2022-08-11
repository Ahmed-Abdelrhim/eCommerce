@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="card" style="width: 18rem;">

            <div class="card-body">
                <h5 class="card-title">Name: {{$product->name}}</h5>
                <p class="card-text">Description : {{$product->description}}</p>
                <p class="card-text">Selling Price : {{$product->selling_price}}</p>
                <p class="card-text">Special Price Type: {{$product->special_price_type}}</p>
                <p class="card-text">Special Price Start : {{$product->special_price_start}}</p>
                <p class="card-text">Special Price End  : {{$product->special_price_end}}</p>
                <p class="card-text">Available in Stock  : {{$product->is_active == 1 ? 'Active' : 'Not active'}}</p>
                <p class="card-text">Quantity : {{$product->qty}}</p>

                <a href="{{route('update-product',$product->id)}}" class="btn btn-primary">Update Product</a>
            </div>
        </div>
    </div>
@stop
