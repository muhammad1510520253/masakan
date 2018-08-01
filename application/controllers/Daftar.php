<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
// Load Database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('konfigurasi_model');
		$this->load->model('artikel_model');
		
		
	}
	public function index()
	{
		
		$konfigurasi=$this->konfigurasi_model->listing();
		$artikel=$this->artikel_model->listing();
	
	
		$user =$this->user_model->listing();
	
		
		$data=array('title' => $konfigurasi->Nama_Web,
			
			'artikel' =>$artikel,
		
		
			'user' => $user,
			

			'konfigurasi'=>$konfigurasi,
					'isi'	=> 'daftar/list'
				);
		$this->load->view('layout/wrapper_layout',$data,FALSE);
	
	}
	
	public function penulis()
	{

			
		$valid=$this->form_validation;
	
		$valid->set_rules('username','Username','required|trim|is_unique[user.username]');
	
				if ($valid->run()===FALSE) {
					
		// echo "<script>
		// 	alert('peringatan! Username sudah digunakan');
		// </script>";
					$u=$this->input->post('username');
				
						$this->session->set_flashdata('pesan', 'Peringatan: Username '.'<strong>'. $u . '</strong>'.' sudah digunakan');
						
					echo redirect('daftar','refresh');

				} else {
					# code...
				
				
$konfigurasi=$this->konfigurasi_model->listing();
		$artikel=$this->artikel_model->listing();
	
	
		$user =$this->user_model->listing();
		$datalain=array('title' => 'Login',
			'artikel' =>$artikel,
			
			'user' =>$user,
			'konfigurasi'=>$konfigurasi,
					'isi'	=> 'admin/login/list'
				);
		
		
		$i=$this->input;
		$data = array('Nama' =>$i->post('nama'),
					  'Email' =>$i->post('email'),
					  'Username' =>$i->post('username'),
			  	      'Password' =>sha1($i->post('password')),
			  	      'HP' =>$i->post('hp'),
					  'Hak_Akses' =>'Penulis'
					  );
		$this->user_model->tambah($data);
		$this->session->set_flashdata('sukses', 'Data telah ditambah');
		$this->load->view('layout/wrapper_layout',$datalain,FALSE);
		 
                      // link delete
                  }
                     

	}
	// End masuk database
	}

	// Edit User
	
	// End masuk database
	
	// Delete user
	



/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */