<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Management extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('manage_model');
	}

	public function index()
	{
		$this->template->title = "Warehouse and Item Management";

		$houses = $this->manage_model->list_warehouses();
		$items = $this->manage_model->list_items();

		$this->template->content->view('manage', array('items' => $items, 'houses' => $houses));
		$this->template->publish();
	}

}

/* End of file management.php */
/* Location: ./application/controllers/management.php */