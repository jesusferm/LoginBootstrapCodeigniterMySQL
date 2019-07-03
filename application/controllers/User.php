<?php
class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('user_model');
		$this->load->library('session');
	}

	public function register_user(){
		$user=array(
			'nom_user'=>$this->input->post('txt-nom-user'),
			'email'=>$this->input->post('txt-email'),
			'password' => password_hash($this->input->post('txt-password'), PASSWORD_DEFAULT)
		);
		//print_r($user);
		$email_check = $this->user_model->email_check($user['email']);
		if($email_check){
			$this->user_model->register_user($user);
			$this->session->set_flashdata('success_msg', 'Usuario registrado correctamente. Ahora inicia sesión.!');
			redirect('login');
		}else{
			$this->session->set_flashdata('error_msg', 'El nombre de usuario o email ya existen. Intente de nuevo.');
			redirect('registration');
		}
	}

	function login_user(){
		$user_login=array(
			'email'=>$this->input->post('txt-email'),
			'password'=>$this->input->post('txt-password')
		);
		$data = $this->user_model->login_user($user_login['email']);
		if($data && password_verify($user_login['password'], $data['password'])){
			$this->session->set_userdata('id_user_session',$data['id_user']);
			$this->session->set_userdata('nom_user_session',$data['nom_user']);
			$this->session->set_userdata('email_session',$data['email']);
			$this->session->set_userdata('password_session',$data['password']);
			redirect('dashboard', $data);
		}else{
			$this->session->set_flashdata('error_msg', 'Email o contraseña incorrecto.');
			redirect('login', $data);
		}
	}

	public function user_logout(){
		$this->session->sess_destroy();
		redirect('main', 'refresh');
	}
}
?>
