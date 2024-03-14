@extends('master')
@section('title','Categories')
@section('content')
<style>div#nTable_wrapper {
    border: 1px solid #efefef;
    padding: 30px;
    border-radius: 20px;
}</style>
<section>
<div class="header">
    <div class="title">
        <h1>Categories</h1>
    </div>
</div>

</section>
<section>
<table id="nTable" class="table " style="width:100%">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Number of products</th>
            </tr>
        </thead>
        <tbody>

        @foreach($categories as $category)
            <tr>
                <td>{{$loop->iteration  }}</td>
                <td>{{$category->name}}</td>
                <td><a href="{{route('products')}}?category={{$category->id}}">{{$category->products()->count()}} (Show)</a></td>
            </tr>
        @endforeach
         
            
          
        </tbody>
       
    </table>
    </section>
@endsection