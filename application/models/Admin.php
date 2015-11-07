<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Model {

    public $user;

    public function get_user($user_info)
    {
        $row = $this->db->query("SELECT * FROM admins WHERE email = ?", array($user_info['email']))->row_array();
        if(password_verify($user_info['password'], $row['password']))
            return $row;
        else
            return FALSE;
    }

    public function insert_user($user_info)
    {
        $query = "INSERT INTO admins (name, email, password) VALUES (?,?,?)";
        $this->db->query($query, array(
                                        $user_info['name'],
                                        $user_info['email'],
                                        password_hash($user_info['password'],PASSWORD_DEFAULT)
                                        ));
        return $this->db->insert_id();
    }
}