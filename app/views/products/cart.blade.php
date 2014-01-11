@extends('layout')

@section('main-content')
  <div id="no_items_msg"></div>
  <form id="cart_form" method="post" action="/cart">

  </form>
@stop

@section('custom-js')
  $(document).on('ready', function(){
    var cart_form_content = "";
    var local_storage_size = localStorage.length;
    for(i=0; i< local_storage_size; i++){
      var product_code = localStorage.key(i);
      var product = JSON.parse(localStorage.getItem(product_code));
      cart_form_content += (product.name + "("+ product.id + ")" +": <input type='text' value='1' name='"+ product.code + "'><br/>");
    }
    if(local_storage_size > 0){
      cart_form_content += "<input type='submit' value='Get Quote'>";
      cart_form_content += "<input type='button' id='remove' value='Clear'>";
    }
    else{
      $('#no_items_msg').html('No Items on Cart');
    }
    $("#cart_form").append(cart_form_content);

    $(document).on('click', '#remove', function(){
      localStorage.clear();
    });
  });
@stop