<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboards extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Order');
    // $this->session->set_userdata('cart', array());
  }

  public function index()
	{
    $show_all_orders = $this->Order->show_all_orders();
		$this->load->view('orders', array('show_all' =>$show_all_orders));
	}

  public function index_html()
  {
    $show_all_orders = $this->Order->show_all_orders();
    $this->load->view('partials/orderPartial', array('show_all' =>$show_all_orders));
  }

  public function order($id)
  {
    $order = $this->Order->orders($id);
    $user_info = $this->Order->user_info($id);
    $this->load->view('show', array('order'=>$order, 'user_info'=>$user_info));
  }

  public function update($id)
  {
    $status = $this->input->post();
    $this->Order->update($id, $status);
    redirect('/dashboards/index_html');
  }

  public function status_search()
  {
    $status_search = $this->input->post('status_search');
    if($status_search == 'Show All'){
      redirect('/dashboards/index_html');
    }
    $status_search = $this->Order->status_search($status_search);
    $this->load->view('partials/orderPartial', array('show_all' =>$status_search));
  }

  public function search()
  {
    $search = $this->input->post('search');
    $search_result = $this->Order->search($search);
    $this->load->view('partials/orderPartial', array('show_all' => $search_result));
  }

  public function cart($id)
  {
    $cart = $this->session->userdata('cart');

    for($i = 0; $i<count($cart); $i++)
    {
      if($cart[$i]['id'] == $this->input->post('id')){
        $cart[$i]['amount'] = $cart[$i]['amount'] + $this->input->post('amount');
        break;
      }
      if($i == (count($cart)-1)){
        $cart[] = $this->input->post();
        break;
      }
    }
    $this->session->set_userdata('cart', $cart);
    $string ="/products/one_pokemon/".$id;
    redirect($string);
  }

  public function checkout()
  {
    $this->load->view('charge');
  }

  public function logout()
  {
  $this->session->sess_destroy();
  redirect('/products/product_page');
  }

  public function pokeballs()
  {
    $this->load->view('pokeballs');
  }

}
