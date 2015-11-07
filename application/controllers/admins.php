<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admins extends CI_Controller {
    protected $view_data = array();
    protected $user_session = NULL;

    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Admin');
        $this->view_data['user_session'] = $this->user_session = $this->session->userdata("user_session");
    }

    public function index()
    {
        $this->load->view('login');
    }
    public function process_registration()
    {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("name", "Name", "trim|required");
        $this->form_validation->set_rules("email", "Email", "trim|valid_email|required");
        $this->form_validation->set_rules("password", "Password", "trim|min_length[8]|required|matches[confirm]|md5");
        $this->form_validation->set_rules("confirm", "Confirm Password", "trim");
        $this->form_validation->set_rules("code", "Admin Code", "trim|required");

        if($this->form_validation->run() === FALSE)
        {
            $this->session->set_flashdata('registration_errors', validation_errors());
            redirect('/');
        }
        else if($this->input->post('code') != 'ADMIN')
        {
            $this->session->set_flashdata('registration_errors', "<p>The Admin Code is incorrect.</p>");
            redirect('/');
        }
        else
        {
            $user_input = $this->input->post();
            $insert_user = $this->Admin->insert_user($user_input);

            if($insert_user)
            {
                $this->session->set_userdata('user_session', $user_input);
                redirect('/products/index');
            }
            else
            {
                $this->session->set_flashdata( 'registration_errors', "Your information was not registered. Please try again.");
            }
        }
    }

    public function process_login()
    {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("email", "Email", "trim|valid_email|required");
        $this->form_validation->set_rules("password", "Password", "trim|min_length[8]|required|md5");

        if($this->form_validation->run() === FALSE)
        {
            $this->session->set_flashdata('login_errors', validation_errors());
            redirect('/');
        }
        else
        {
            $get_user=$this->Admin->get_user($this->input->post());
        
            if($get_user)
            {
                $this->session->set_userdata('user_session',$get_user);
                redirect('/products/index');
            }
            else
            {
                $this->session->set_flashdata('login_errors', "<p>Invalid Email and/or Password</p>");
                redirect('/');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect("/admins/index");
    }
}