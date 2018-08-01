<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	public function index()
	{
		
		$this->check_login->check();
		$id_user =$this->session->userdata('IdUser');
		$user=$this->user_model->detail($id_user);
		// validasi
		$valid=$this->form_validation;
		$valid->set_rules('nama','Nama','required',
			array('required' => '%s harus diisi'));
		$valid->set_rules('email','Email','required|valid_email',
			array('required' => '%s harus diisi',
				'valid_email' => 'Format %s tidak valid'));
	
		$valid->set_rules('password','Password','required|trim|min_length[6]',
			array('required' => '%s harus diisi',
		'min_length' => '%s minimal 6 karakter'));

		if ($valid->run()===FALSE) {
			// End validasi
		$data=array('title' => 'Update Profile : '.$user->Nama,
			'user' =>$user,
			'isi' =>'admin/profile/list'
		);
		$user =$this->user_model->listing();
		
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// Masuk database
	}else{
		$i=$this->input;
		$data = array('IdUser' =>$id_user,
					  'Nama' =>$i->post('nama'),
					  'Email' =>$i->post('email'),
					  'Username' =>$i->post('username'),
			  	      'Password' =>sha1($i->post('password')),
					  'Hak_Akses' =>$i->post('akses_level'
					  ));
		$this->user_model->edit($data);
		$this->session->set_flashdata('sukses', 'Profile telah di Update');
		redirect(base_url('admin/profile'),'refresh');
	}
	// End masuk database
	} 
	}



/* End of file profile.php */
/* Location: ./application/controllers/admin/profile.php */