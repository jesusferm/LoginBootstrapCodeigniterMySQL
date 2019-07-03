	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('admin_login');
	}

	public function index(){
		$data['title'] = 'Bienvenido al Pánel';
		$data['tab'] = 'dashboard';
		$this->load->view('common/head', $data);

		// Send to View
		$this->load->view('dashboard', $data);

		$this->load->view('common/foot', $data);
	}
}
