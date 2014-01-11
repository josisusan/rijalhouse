@extends('layout')

@section('main-content')
Items On Cart(<span id="items_counter">0</span>)<br/>
<h2>Products Listing</h2>
<table border="1">
  <th>Product Name</th>
  <th>Product Code</th>
  <th>Options</th>
  @foreach($products as $product)
    <tr>
      <td>{{ link_to('products/'.$product->id, $product->name) }}</td>
      <td>{{ $product->code }}</td>
      <td>{{ link_to('#', 'Add To Cart', $attributes = array('id'=>$product->code, 'class'=>'add_to_cart', 'data-product-name'=>$product->name))}} </td>
    </tr>
  @endforeach
</table>
@stop

@section('custom-js')
  $(document).on('ready', function(){
    
    var items_count = localStorage.length;
    $("#items_counter").html(items_count);

    $('.add_to_cart').on('click', function(event){
      event.preventDefault();
      if ('localStorage' in window && window['localStorage'] !== null) {
        var product_id = $(this).attr('id');
        var product = {}
        product["name"] = $(this).data('product-name');
        product["id"] = product_id;
        product["quantity"] = 1;
        product_item = JSON.stringify(product);
        localStorage.setItem(product_id, product_item);
        var items_count = localStorage.length;
        $("#items_counter").html(items_count);
        // console.log("done");
      } else {
        alert('Cannot store user preferences as your browser do not support local storage');
      }
    });
  });
@stop