<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class manage_model extends CI_Model {

	function list_warehouses() {
		return $this->db->get('warehouses')->result();
	}

	function list_items() {
		return $this->db->get('items')->result();
	}

}

/* End of file manage_model.php */
/* Location: ./application/models/manage_model.php */