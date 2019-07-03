<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function getData() {
		return 'Función de ejemplo.';
	}

	public function register_user($user){
		$this->db->insert('users', $user);
	}

	public function login_user($email){
		$this->db->select('id_user');
		$this->db->select('password');
		$this->db->select('email');
		$this->db->select('nom_user');
		$this->db->from('users');
		$this->db->where('email',$email);
		if($query=$this->db->get()){
			return $query->row_array();
		}else{
			return false;
		}
	}
	public function email_check($email){
		$this->db->select('id_user');
		$this->db->from('users');
		$this->db->where('email',$email);
		$query=$this->db->get();
		if($query->num_rows()>0){
			return false;
		}else{
			return true;
		}
	}

	public function nickname_check($nom_user){
		$this->db->select('id_user');
		$this->db->from('users');
		$this->db->where('nom_user',$nom_user);
		$query=$this->db->get();
		if($query->num_rows()>0){
			return false;
		}else{
			return true;
		}
	}
}