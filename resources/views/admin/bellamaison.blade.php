@extends('master')
@section('title','Bella Maison')
@section('content')
<style>div#nTable_wrapper {
    border: 1px solid #efefef;
    padding: 30px;
    border-radius: 20px;
}</style>
<section>
<div class="header">
    <div class="title">
        <h1>Bella Maison</h1>
    </div>
</div>

</section>
<section>
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
<form method="GET" action="{{route('fetch')}}">

<div class="row">
<div class="col-md-12">
        <label for="">Max Page</label>
        <input type="text" class="form-control" name="maxpage" value="2">
    </div>

    <div class="col-md-12 mt-3">
        <input type="checkbox" name="image" id="image" value="1"> <label for="image"> Update Images</label>
    </div>
    <div class="col-md-12 mt-3">
        <button class="form-control go">Start</button>
    </div>
</div>
<div class="alert alert-primary wait mt-3" style="display:none;" role="alert">
  Please Waiting...
</div>
</form>
    </section>

    <script>
        $(".go").click(function(){

            $(".wait").show();
        })
    </script>
@endsection