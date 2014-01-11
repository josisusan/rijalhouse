<?php

class ProductsController extends \BaseController {

	protected $layout = 'layout';
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = Product::all();
		return View::make('products/index')->with('products', $products);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('products/create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// $product = new Product;

		// $product->name = Input::get('name');
		// $product->code = Input::get('code');

		$product = Product::create(array(	'name' => Input::get('name'),
																			'code' => Input::get('code')
																		)
															);

		// $product->save();
		if($product){
			return Redirect::route('products.show', $product->id);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$product = Product::find($id);

		return View::make('products/show')->with('product', $product);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$product = Product::findOrFail($id);
		return View::make('products.edit', compact('product'));	
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$product = Product::findOrFail($id);
		$product->update(Input::all());

		// $product->save();
		if($product){
			return Redirect::route('products.show', $product->id);
		}	
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$product = Product::find($id);

		$product->delete();

		$products = Product::all();
		return View::make('products/index')->with('products', $products);
	}

	public function getCart(){
		return View::make('products/cart');
	}

	public function postCart(){
		$inputs = Input::all();
		return $inputs;
	}

}