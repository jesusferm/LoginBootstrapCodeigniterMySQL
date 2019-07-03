<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index(){
		$data['title'] = 'Registro de usuarios'; 
		$this->load->view('common/head', $data);

		$this->load->view('registration');

		
		$this->load->view('common/foot', $data);
	}
}
