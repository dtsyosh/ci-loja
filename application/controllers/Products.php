<?php

/**
* Products Controller
*/
class Products extends CI_Controller {

	public function index() {
		$this -> load -> view('products/index');
	}
	
	public function create() {
		$this -> load -> view('products/create');
	}

	public function store()	{
		
		$this -> db -> insert(array(
			'name' => $_POST['name'],
			'price' => $_POST['price'],
			'quantity' => $_POST['quantity']
		));
	}

	public function update() {

	}

	public function destroy() {

	}
}