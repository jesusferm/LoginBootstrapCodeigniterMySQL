	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('main_page');
	}

	public function index(){
		$data['title'] = 'LiNuXiToS';
		$data['tab'] = 'main';
		$this->load->view('common/head', $data);

		// Load data from Model
		$dataFromModel = $this->main_page->getData();
		$data['dataFromModel'] = $dataFromModel;

		// Send to View
		$this->load->view('principal', $data);
		$this->load->view('common/foot', $data);
	}
}
