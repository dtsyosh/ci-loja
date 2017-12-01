<?php

/**
* Products Controller
*/
class Products extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this -> load -> model('Product_model', 'products');
	}

	public function index() {
		
		$data['title'] = 'Produtos';

		$this -> load -> view('templates/header');
		$this -> load -> view('products/index', $data);
		$this -> load -> view('templates/footer');
	}
	
	public function create() {

		$data['title'] = 'Cadastrar Produto';

		$this -> load -> view('templates/header');
		$this -> load -> view('products/create', $data);
		$this -> load -> view('templates/footer');
	}

	public function store()	{
		
		$this -> products -> insert();
	}

	public function update() {
		
		$this -> products -> update();
	}

	public function destroy() {

		$this -> products -> delete();
	}
}