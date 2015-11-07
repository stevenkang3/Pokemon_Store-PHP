<?php

	class product extends CI_Model
	{
		public function getAll()
		{
			$query = "SELECT * FROM products";
			return $this->db->query($query)->result_array();
		}

		public function getOne($id)
		{
			$query = "SELECT * FROM products WHERE id = " . $id;
			return $this->db->query($query)->row_array();
		}

		public function getTypes()
		{
			$query = "SELECT category FROM products ORDER BY category";
			return $this->db->query($query)->result_array();
		}

		public function search($string)
		{
			$query = "SELECT * FROM products WHERE name LIKE '" . $string . "' OR category LIKE '" . $string . "'";
			return $this->db->query($query)->result_array();
		}
		public function category($type)
		{
			$query ="SELECT * FROM products WHERE category LIKE '" . $type . "'";
			return $this->db->query($query)->result_array();
		}

		public function previewSimilar($category, $name)
		{
			$query = "SELECT id, name, image FROM products WHERE category = '" . $category . "' AND name != '" . $name . "'";
			return $this->db->query($query)->result_array();
		}

		public function addPokemon($data)
		{
			$query = "INSERT INTO products (name, description, category, price, inventory, quantity_sold, image) VALUES (?,?,?,?,?,?,?)";
			$this->db->query($query, $data);
		}

		public function editPokemon($id, $data)
		{
			$query = "UPDATE products SET name = '" . $data['name'] . "', description = '" . $data['description'] . "', category = '" . $data['category'] . "', price = '" . $data['price'] . "', inventory = '" . $data['inventory'] . "' WHERE id = '" . $id . "'";
			$this->db->query($query);
			if ($data['image'])
			{
				$query = "UPDATE products SET image = '" . $data['image'] . "' WHERE id = '" . $id . "'";
				$this->db->query($query);
			}
		}

		public function deletePokemon($id)
		{
			$query = "DELETE FROM products WHERE id = " .$id;
			$this->db->query($query);
		}
	}

?>
