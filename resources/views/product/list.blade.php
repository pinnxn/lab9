@extends('layouts.main')

@section('title','Product : List')

@section('content')

<form class="form" action="{{ route('product-list')}}" method="grt">
    

    <table>
        <tr>
            <td> <label for="term"><strong>Search</strong></label></td>
            <td class="blue"><strong>::</strong></td>
            <td><input type="text" name="term" id="term" value="{{$data['term']}}"></td>
        </tr>
        <tr>
            <td> <label for="minPrice"><strong>Min Price</strong></label></td>
            <td class="blue"><strong>::</strong></td>
            <td><input type="text" name="minPrice" id="minPrice" value="{{$data['minPrice']}}"></td>
        </tr>
        <tr>
            <td> <label for="maxPrice"><strong>Max Price</strong></label></td>
            <td class="blue"><strong>::</strong></td>
            <td><input type="text" name="maxPrice" id="maxPrice" value="{{$data['maxPrice']}}"></td>
        </tr>
</table>
</form>
<div class="actions">
    <button type="submit" class="blue-box">Search</button>

    <a href="{{ route('product-list')}}">
        <button class="green-box">Clear</button>
    </a>
    </div>


<a class="link" href="{{ route('product-create-form')}}">New Product</a>

<table class="list"> 
    <tr>
        <th>Code</th>
        <th>Name</th>
        <th>Price</th>
        <th>No. of Shops</th>
    </tr>
    @foreach($products as $product)
    <tr>
        <td class="code"><a href="{{ route('product-detail',['code'=> $product->code]) }}">{{$product->code}}</a></td>
        <td>{{$product->name}}</td>
        <td>{{number_format((double)$product->price, 2) }}</td>
        <td>{{$product->shops_count}}</td>
    </tr>
    @endforeach
</table>

{{ $products->links() }}

@endsection