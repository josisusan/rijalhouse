<?php
class ProductTableSeeder extends Seeder {
  public function run(){
    DB::table('products')->delete();
    
    // Remove the Illuminate\Database\Eloquent\MassAssignmentException
    Eloquent::unguard();

 
    Product::create(array(
        'name' => 'topi',
        'code' => 'rh001'
    ));

    Product::create(array(
        'name' => 'cap',
        'code' => 'rh002'
    ));
  }
}