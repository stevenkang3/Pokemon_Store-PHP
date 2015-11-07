<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class products extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('product');
			$this->load->helper('form');
			$this->load->library('parser');
		}

		public function index()
		{
			$types = $this->product->getTypes();
			$newTypes = array_unique($types, SORT_REGULAR);
			$this->load->view('modals/addModal', array('types' => $newTypes));
			$this->load->view('productMain');
		}

		public function load_products()
		{
			$data = $this->product->getAll();
			$this->load->view('partials/productList', array("productList" => $data));
		}

		public function load_preview()
		{
			$search = $this->input->post('search');
			$search = "%" . $search . "%";
			$data = $this->product->search($search);
			echo $this->load->view('partials/productList', array("productList" => $data));
		}

		// Edit Modal
		public function one_product($id)
		{
			$data = $this->product->getOne($id);
			$types = $this->product->getTypes();
			$newTypes = array_unique($types, SORT_REGULAR);
			$this->load->view('modals/editModal', array('info' => $data, 'types' => $newTypes));
		}

		// Delete Modal
		public function del($id)
		{
			$data = $this->product->getOne($id);
			$this->load->view('modals/deleteModal', array('info' => $data));
		}

		public function add()
		{
			$directory = 'uploads/';
			$fileName = $directory . basename($_FILES['upload']['name']);
			if(move_uploaded_file($_FILES['upload']['tmp_name'], $fileName))
			{
				$cat = trim($this->input->post('newCategory'));
				if (empty($cat))
					$category = $this->input->post('category');
				else
					$category = $this->input->post('newCategory');

				$data = array(
							'name' => $this->input->post('name'),
							'description' => $this->input->post('description'),
							'category' => $category,
							'price' => $this->input->post('price'),
							'inventory' => $this->input->post('inventory'),
							'quantity_sold' => 0,
							'image' => $fileName
							);
				$this->product->addPokemon($data);
			}
			redirect('/products/index');
		}

		public function edit()
		{
			$cat = trim($this->input->post('newCategory'));
			if (empty($cat))
				$category = $this->input->post('category');
			else
				$category = $this->input->post('newCategory');

			$data = array(
						'name' => $this->input->post('name'),
						'description' => $this->input->post('description'),
						'category' => $category,
						'price' => $this->input->post('price'),
						'inventory' => $this->input->post('inventory'),
						'image' => false
						);

			if ($_FILES['upload']['size'] > 0)
			{
				$directory = 'uploads/';
				$fileName = $directory . basename($_FILES['upload']['name']);

				move_uploaded_file($_FILES['upload']['tmp_name'], $fileName);
				$data['image'] = $fileName;
			}

			$this->product->editPokemon($this->input->post('id'), $data);
			redirect('/products/index');

		}

		public function preview()
		{
			$previewData = $this->input->post();
			$similar = $this->product->previewSimilar($previewData['category'], $previewData['name']);

			$directory = 'uploads/temp/';
			$fileName = $directory . basename($_FILES['upload']['name']);

			move_uploaded_file($_FILES['upload']['tmp_name'], $fileName);
			$previewData['image'] = $fileName;

			$this->load->view('preview_pokemon', array('previewData' => $previewData, 'similarPokemons' => $similar));
		}

		public function delete()
		{
			$this->product->deletePokemon($this->input->post('id'));
			redirect('/products/index');
		}

		public function product_page()
		{
			$data = $this->product->getAll();
			$types = $this->product->getTypes();
			$newTypes = array_unique($types, SORT_REGULAR);
			$this->load->view('product_page', array("products" => $data, 'types'=> $newTypes));
		}

		public function one_pokemon($id)
		{
		$data = $this->product->getOne($id);
		$similar = $this->product->previewSimilar($data['category'], $data['name']);
		$this->load->view('onePokemon', array('similarPokemons' => $similar, 'info' => $data));
		}
		public function load_search()
		{
			$search = $this->input->post('search');
			$search = "%" . $search . "%";
			$data = $this->product->search($search);
			$types = $this->product->getTypes();
			$newTypes = array_unique($types, SORT_REGULAR);
			$this->load->view('product_page', array("products" => $data, 'types' => $newTypes));
		}
		public function category($category)
		{
			$search = "%". $category. "%";
			$data = $this->product->category($search);
			$types = $this->product->getTypes();
			$newTypes = array_unique($types, SORT_REGULAR);
			$this->load->view('product_page', array("products" => $data, 'types' => $newTypes));
		}
	}

?>
