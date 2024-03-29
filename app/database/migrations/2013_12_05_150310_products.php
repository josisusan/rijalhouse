<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Products extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Create Products Table
		Schema::create('products', function(Blueprint $table){
			$table->increments('id');
			$table->string('name');
			$table->string('code');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Delete the products table
		Schema::drop('products');
	}

}
