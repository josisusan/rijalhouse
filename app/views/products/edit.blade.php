@extends('layout')

@section('main-content')
  {{ Form::model($product, array('method' => 'PATCH', 'route' => ['products.update', $product->id])) }}
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name') }}
    <br>
    {{ Form::label('code', 'Code') }}
    {{ Form::text('code') }}
    <br>
    {{ Form::submit() }}
  {{ Form::close('Update') }}
@stop
