<?php

/**
* Products Controller
*/
class Products extends CI_Controller {

	public function __construct() {
		parent::__construct();

		/*
		 * Carrega o arquivo model 'Product_model'
		 * e atribui a ele o apelido 'products'
		 * para ficar mais facil de chamar
		 */

		$this -> load -> model('Product_model', 'products');
	}

	public function index() {
		
		// Cria a variavel 'title' na view
		$data['title'] = 'Produtos';

		// Carrega os arquivos da view: header, pagina, footer
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
		
		// Invoca o método insert() do model
		$this -> products -> insert();
	}

	public function update() {
		
		// Invoca o método update() do model
		$this -> products -> update();
	}

	public function destroy() {

		// Invoca o método delete() do model
		$this -> products -> delete();
	}
}