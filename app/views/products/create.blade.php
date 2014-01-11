@extends('layout')

@section('main-content')
  {{ Form::open(array('route' => 'products.store')) }}
    Product Name: {{ Form::text('name', 'Sweater'); }} <br>
    Product Code: {{ Form::text('code', 'rh003'); }} <br>
    {{ Form::submit('Insert Product') }}
  {{ Form::close() }}
@stop