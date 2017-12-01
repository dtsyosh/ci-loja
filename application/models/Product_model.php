<?php

class Product_model extends CI_Model {

	public function getProductById($id) {

		if ($id) {

			$query = $this -> db -> get_where('products', array('id' => $id));
			
			return $query -> row();
		}

	}

	public function insert($data) {

		/*
		 * Insere no banco através do Query Builder do CI
		 */

        $this -> db -> insert('products', $data); 
	}

    public function update($data) {
		
		/*
		 * Atualiza os dados no banco atraves do método
		 * replace() do Query Builder do CI
		 */
		
		$this -> db -> replace('products', $data);
	}

	public function delete($id) {
		$this -> db -> delete('products', $id);
	}
}