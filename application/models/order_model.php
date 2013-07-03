<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order_model extends CI_Model {

	public function get_all_open() {
		$this->db->select('orders.id, item, amount, user, requested, items.name');
		$this->join_items();
		
		return $this->db->get_where('orders', array('state' => 0))->result();
	}

	public function get_all_user($name) {
		$this->join_items();
		return $this->db->get_where('orders', array('user' => $name))->result();
	}

	private function join_items() {
		$this->db->join('items', 'orders.item = items.id');
	}

}

/* End of file order_model.php */
/* Location: ./application/models/order_model.php */