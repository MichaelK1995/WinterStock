<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('order_model');

		$this->template->active = 'orders';
	}

	public function index()
	{
		$this->template->title = "Pending Orders";
		$this->template->content->view('order_list', array('orders' => $this->order_model->get_all_open()));
		$this->template->publish();
	}

	public function user($username) {
		$this->template->title = "Orders by User";
		$this->template->content->view('order_list', array('orders' => $this->order_model->get_all_user($username)));
		$this->template->publish();
	}

}

/* End of file orders.php */
/* Location: ./application/controllers/orders.php */