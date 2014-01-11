<?php

class Product extends Eloquent {

  protected $table = 'products';

  protected $fillable = array('name', 'code');

}