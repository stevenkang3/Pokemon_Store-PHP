<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Model {

    public $user;

    public function insert_user($user_info)
    {
        $query = "INSERT INTO carts (shipping_first_name, shipping_last_name, shipping_address, shipping_city, shipping_state, shipping_zip, billing_first_name, billing_last_name, billing_address, billing_city, billing_state, billing_zip)
                VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $this->db->query($query, array(
            $user_info['shipping_first_name'],
            $user_info['shipping_last_name'],
            $user_info['shipping_address'],
            $user_info['shipping_city'],
            $user_info['shipping_state'],
            $user_info['shipping_zip'],
            $user_info['billing_first_name'],
            $user_info['billing_last_name'],
            $user_info['billing_address'],
            $user_info['billing_city'],
            $user_info['billing_state'],
            $user_info['billing_zip'],
        ));
        return $this->db->insert_id();
    }
}