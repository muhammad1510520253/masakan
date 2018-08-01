<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
//load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('konfigurasi_model');
		$this->load->model('artikel_model');
		
		
	}
	public function index()
	{
		if($id_user=$this->session->userdata('IdUser')){
		
			redirect(base_url('admin/dasbor'),'refresh');
		
		}else{

		// $this->check_login->checkout();
$konfigurasi=$this->konfigurasi_model->listing();
		$artikel=$this->artikel_model->listing();
	
	
		$user =$this->user_model->listing();
		$datalain=array('title' => 'Login',
			'artikel' =>$artikel,
			'user' =>$user,
			'konfigurasi'=>$konfigurasi,
					'isi'	=> 'admin/login/list'
				);
		$this->load->view('layout/wrapper_layout',$datalain,FALSE);
		// validasi
		$valid=$this->form_validation;
		$valid->set_rules('username','Username','required',
			array('required' => '%s harus diisi'
					));
		$valid->set_rules('password','Password','required|trim',
			array('required' => '%s harus diisi'
		));

		if($valid->run()){
			$username 		= $this->input->post('username');
			$password 		= $this->input->post('password');
			// Compare dengan data di database
			$check_login 	=$this->user_model->login($username,
				$password);
			// Kalau ada data yang cocok maka create SESSION ada 4 (id_user,username,akses_level,dan nama)
			if($check_login && count($check_login) == 1){
				$this->session->set_userdata('IdUser',$check_login->IdUser);
				$this->session->set_userdata('Username',$check_login->Username);
				$this->session->set_userdata('Nama',$check_login->Nama);
				$this->session->set_userdata('Hak_Akses',$check_login->Hak_Akses);
				$this->session->set_flashdata('sukses','Anda berhasil Login');
				redirect(base_url('admin/dasbor'),'refresh');
			}else{
				// kalau tidak cocok redirect ke halaman login
				$this->session->set_flashdata('salah','Username atau Password salah');
				redirect(base_url('login'),'refresh');
			}
		}

		}

	// End validasi

		
		
	}

	//logout
	public function logout(){
		 $this->check_login->logout();
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */