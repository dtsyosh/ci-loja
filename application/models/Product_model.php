<?php

class Product_model extends CI_Model {

	public function insert() {

		/*
		 * Insere no banco através do Query Builder do CI
		 * Pegando as variaveis de $_POST atraves do método
		 * $this -> input -> post() do CI pois é mais seguro
		 */

        $this -> db -> insert('products', array(
            'name'          => $this -> input -> post('name'),
			'price'         => $this -> input -> post('price'),
			'quantity'      => $this -> input -> post('quantity')
        ));
    }

    public function update() {
		
		/*
		 * Atualiza os dados no banco atraves do método
		 * replace() do Query Builder do CI
		 */
		
		$this -> db -> replace('products', array(
			'id'       => $this -> input -> post('id'),
			'name'     => $this -> input -> post('name'),
			'price'    => $this -> input -> post('price'),
			'quantity' => $this -> input -> post('quantity')
		));
	}

	public function delete() {
		$this -> db -> delete('products', array('id' => $this -> input -> post('id')));
	}
}