<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Model {

  public function show_all_orders()
  {
    return $this->db->query("SELECT DISTINCT orders.id, first_name, address, city, state, zip, status, count(orders.id),
					                 ROUND(SUM(quantity * price),2) as total, orders.created_at FROM orders LEFT JOIN shipping ON shipping.order_id = orders.id
                           LEFT JOIN products ON shipping.product_id = products.id GROUP BY id having count(orders.id) > 1")->result_array();
  }

  public function user_info($id)
  {
    $query = "SELECT DISTINCT * FROM orders WHERE orders.id = ?";
    return $this->db->query($query, $id)->result_array();
  }

  public function orders($id)
  {
    $query ="SELECT * FROM products LEFT JOIN shipping ON products.id = shipping.product_id WHERE order_id = ?";
    return $this->db->query($query, $id)->result_array();
  }

  public function update($id, $status)
  {

    $query = "UPDATE shipping SET status= ? WHERE order_id = ?";
    $this->db->query($query, array($status['shipstatus'], $id));
  }

  public function status_search($status_search)
  {
    $query = "SELECT DISTINCT orders.id, first_name, address, city, state, zip, status, count(orders.id),
					                 ROUND(SUM(quantity * price),2) as total, orders.created_at FROM orders LEFT JOIN shipping ON shipping.order_id = orders.id
                           LEFT JOIN products ON shipping.product_id = products.id WHERE status = ? GROUP BY id having count(orders.id) > 1 ";
    return $this->db->query($query,$status_search)->result_array();
  }

  public function search($search)
  {
    $query ="SELECT DISTINCT orders.id, first_name, address, city, state, zip, status, count(orders.id),
					                 ROUND(SUM(quantity * price),2) as total, orders.created_at FROM orders LEFT JOIN shipping ON shipping.order_id = orders.id
                           LEFT JOIN products ON shipping.product_id = products.id WHERE first_name LIKE '%{$search}%' GROUP BY id having count(orders.id) > 1";

    return $this->db->query($query)->result_array();
  }
}
