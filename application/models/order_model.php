<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order_model extends CI_Model {

	public function get_all_open() {
		$this->db->select('orders.id, item, amount, user, requested, items.name');
		$this->db->join('items', 'orders.item = items.id');
		return $this->db->get_where('orders', array('state' => 0))->result();
	}

	public function get_all_user($name) {
		return $this->db->get_where('orders', array('user' => $name))->result();
	}

}

/* End of file order_model.php */
/* Location: ./application/models/order_model.php */