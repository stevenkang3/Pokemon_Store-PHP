<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Order');
  }

  public function index()
	{
		$this->load->view('user_home');
	}
}
