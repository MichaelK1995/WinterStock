<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Access extends CI_Controller {

	public function login()
	{
		$this->template->active = "access/login";

		// TODO add login functionality here

		$this->session->set_userdata('logged_in', true);
		redirect('orders');
	}

	public function logout() {
		$this->session->unset_userdata('logged_in');
		redirect('orders');
	}

}

/* End of file access.php */
/* Location: ./application/controllers/access.php */