<?php

class Product_model extends CI_Model {

	public function insert() {

        $this -> db -> insert('products', array(
            'name'          => $this -> input -> post('name'),
			'price'         => $this -> input -> post('price'),
			'quantity'      => $this -> input -> post('quantity')
        ));
    }

    public function update() {
		
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