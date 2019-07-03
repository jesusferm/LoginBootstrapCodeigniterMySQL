	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index(){
		$data['title'] = 'Inicio de Sesión'; 
		$this->load->view('common/head', $data);

		// Load data from Model
		$dataFromModel = $this->user_model->getData();
		$data['dataFromModel'] = $dataFromModel;

		// Send to View
		$this->load->view('login', $data);

		$this->load->view('common/foot', $data);
	}
}
