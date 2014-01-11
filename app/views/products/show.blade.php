@extends('layout')

@section('main-content')
  Product<br>
  Name:       {{ $product-> name }} <br>
  Code:       {{ $product-> code }} <br>
  Created At: {{ $product-> created_at }} <br>
  Options:<br>
  <ul>
    <li>{{ link_to_route('products.edit', 'Edit', $product->id); }}</li>
    <li>{{ link_to_route('products.destroy', 'Delete', $product->id); }}</li>
  </ul>
@stop