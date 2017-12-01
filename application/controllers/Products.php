<?php

/**
* Products Controller
*/
class Products extends CI_Controller {

	public function __construct() {
		parent::__construct();

		/*
		 * Carrega o arquivo model 'Product_model'
		 * e atribui a ele o apelido 'product'
		 * para ficar mais facil de chamar
		 */

		$this -> load -> model('Product_model', 'product');
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
		
		$data = array(
            'name'     => $this -> input -> post('name'),
			'price'    => $this -> input -> post('price'),
			'quantity' => $this -> input -> post('quantity')
        );
    
		// Invoca o método insert() do model
		$this -> product -> insert($data);

		redirect('/');
	}

	public function show($id) {
		
		// Realiza uma busca no banco com pelo id passado pela url
		$product = $this -> product -> getProductById($id); 

		// Testa se a consulta achou algum dado correspondente
		if(!$product) {
			redirect('/products');
		}

		// Se passar é por que achou
		$data['title'] = $product -> name;
		$data['product'] = $product;

		$this -> load -> view('templates/header');
		$this -> load -> view('products/show', $data);
		$this -> load -> view('templates/footer');
	}

	public function update() {
		
		$data = array(
			'id'       => $this -> input -> post('id'),
			'name'     => $this -> input -> post('name'),
			'price'    => $this -> input -> post('price'),
			'quantity' => $this -> input -> post('quantity')
		);
		// Invoca o método update() do model
		$this -> product -> update($data);

		redirect('/products');
	}

	public function destroy() {

		$data = $this -> input -> post('id');
		// Invoca o método delete() do model
		$this -> product -> delete($data);
	}
}