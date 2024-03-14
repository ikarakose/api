@extends('master')
@section('title','Products')
@section('content')
<style>div#nTable_wrapper {
    border: 1px solid #efefef;
    padding: 30px;
    border-radius: 20px;
}</style>
<section>
<div class="header">
    <div class="title">
        <h1>Products List</h1>
    </div>
</div>
<div class="filter mb-5">

<form action="" method="GET">
<div class="row">
<div class="col-md-2">
        <label for="">Category</label>
        <select  name="category" class="form-control">
            <option value="">Choose</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}" {{request()->get('category') == $category->id ? "selected" : null}}>{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-2">
        <label for="">Marketplace</label>
        <select  name="marketplace" class="form-control">
        <option value="">Choose</option>
        <option value="2" {{request()->get('marketplace') == 2 ? "selected" : null}}>Amazon</option>
        </select>
    </div>
    <div class="col-md-2">
        <label for="">Min. Price</label>
        <input type="text" name="minprice" value="{{request()->get('minprice')}}" class="form-control">
    </div>
    <div class="col-md-2">
        <label for="">Max. Price</label>
        <input type="text" name="maxprice" value="{{request()->get('maxprice')}}" class="form-control">

    </div>
    <div class="col-md-2 mt-4">
        <button class="form-control">Filter</button>
    </div>

</div>

</form>

</div>
</section>
<section>
<table id="nTable" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th></th>
                <th style="text-align:left;">Image</th>
                <th>Name</th>
                <th>Category</th>
                <th>Qty</th>
                <th>Price</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

        @foreach($products as $product)
            <tr>
                <td>{{$loop->iteration  }}</td>
                <td style="text-align:left;">
                @if($product->image)
                <img width="50px" src="{{asset('storage/'.$product->image)}}"/>
                @endif
                </td>
                <td>{{$product->name}}</td>
                <td>{{($product->getCategory ? $product->getCategory->name : null)}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->price}}{{$product->priceicon}}</td>
                <td><a href="{{route('product',$product->slug)}}" target="_blank">Show</a></td>
            </tr>
        @endforeach
         
            
          
        </tbody>
       
    </table>
    </section>
@endsection