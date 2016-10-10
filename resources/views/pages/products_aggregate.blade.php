@extends('layouts.master',['title'=>$cd->products_name])

@section('title')

@section('content')


    <div class="categBox"><h1>{{$cd->categories_name}}</h1>
        @each('layouts.partials._product_item',$items,'p')

    </div>


@endsection
