<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller {

	// load data konfigurasi
	public function __construct()
	{
		parent::__construct();
		// proteksi
		// if($this->session->userdata('akses_level')!="Admin")
		// {
		// 	$this->session->set_flashdata('sukses','Hak akses Anda tidak mencukupi');
		// 	redirect(base_url('admin/dasbor'),'refresh');
		// }
		$this->load->model('Konfigurasi_model');
	}

// konfigurasi umum
	public function index()
	{
		
		$this->check_login->check();
		$konfigurasi=$this->konfigurasi_model->listing();

// validasi
		$this->form_validation->set_rules('namaweb','Nama Web','required',
			array('required' => '%s harus diisi'
			));
		if($this->form_validation->run()===FALSE){
			// end validasi
		$data = array('title' => 'konfigurasi website',
			'konfigurasi' =>$konfigurasi,
			'isi' => 'admin/konfigurasi/list');
$this->load->view('admin/layout/wrapper', $data, FALSE);
}else{
		$i=$this->input;
		
		$data = array('Id_Konfigurasi'=>$konfigurasi->Id_Konfigurasi,
					'IdUser' => $this->session->userdata('IdUser'),
					'Nama_Web' =>$i->post('namaweb'),
					
					  'Email' =>$i->post('email'),
					  'Telepon' =>$i->post('telepon'),
					  'Alamat' =>$i->post('alamat'),
					  'Website' =>$i->post('website'),
					  'Deskripsi' =>$i->post('Deskripsi'),
					 
					  'Map' =>$i->post('map'),
					  'Facebook' =>$i->post('facebook'),
					  'Instagram' =>$i->post('instagram'),
					
					  );
		$this->konfigurasi_model->edit($data);
		$this->session->set_flashdata('sukses', 'Data telah diubah');
		redirect(base_url('admin/konfigurasi/logo'),'refresh');
			}
			// End masuk validasi
	}


// konfigurasi logo
	public function logo()
	{
		$this->check_login->check();
		$konfigurasi=$this->konfigurasi_model->listing();

// validasi
		$this->form_validation->set_rules('Id_Konfigurasi','Nama Web','required',
			array('required' => '%s harus diisi'
			));
		if($this->form_validation->run()){
			 $config['upload_path']          = './assets/upload/image/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 5000;
                $config['max_width']            = 5000;
                $config['max_height']           = 5000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('Logo')){

			// End validasi
		
			// end validasi
		$data = array('title' => 'konfigurasi website',
			'konfigurasi' =>$konfigurasi,
			'error' =>$this->upload->display_errors(),
			'isi' => 'admin/konfigurasi/logo');
$this->load->view('admin/layout/wrapper', $data, FALSE);
}else{
	// proses manipulasi gambar
		$upload_data=array('uploads'=>$this->upload->data());
		// Gambar asli disimpan di folder assets/upload/image
		// lalu gambar asli di copy untuk versi mini size ke folder assets/upload/image/thumbs
				$config['image_library'] = 'gd2';
		$config['source_image'] = './assets/upload/image/'.$upload_data['uploads']['file_name'];
		// gambar versi kecilpindahkan
		$config['new_image']= './assets/upload/image/thumbs/'.$upload_data['uploads']['file_name'];
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width']         = 200;
		$config['height']       = 200;
		$config['thumb_marker']='';

		$this->load->library('image_lib', $config);

		$this->image_lib->resize();


	
		$i=$this->input;
		
		$data = array('Id_Konfigurasi'=>$konfigurasi->Id_Konfigurasi,
					'IdUser' => $this->session->userdata('IdUser'),
					'Logo' => $upload_data['uploads']['file_name']
					 
					
					  );
		$this->konfigurasi_model->edit($data);
		$this->session->set_flashdata('sukses', 'Data telah diubah');
		redirect(base_url('admin/konfigurasi/logo'),'refresh');
			}}
			// End masuk validasi
				$data = array('title' => 'konfigurasi website',
			'konfigurasi' =>$konfigurasi,
			'isi' => 'admin/konfigurasi/logo');
$this->load->view('admin/layout/wrapper', $data, FALSE);
	}


// konfigurasi icon
	public function icon()
	{
		$this->check_login->check();
		$konfigurasi=$this->konfigurasi_model->listing();

// validasi
		$this->form_validation->set_rules('Id_Konfigurasi','Nama Web','required',
			array('required' => '%s harus diisi'
			));
		if($this->form_validation->run()){
			 $config['upload_path']          = './assets/upload/image/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 5000;
                $config['max_width']            = 5000;
                $config['max_height']           = 5000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('Icon')){

			// End validasi
		
			// end validasi
		$data = array('title' => 'konfigurasi icon ',
			'konfigurasi' =>$konfigurasi,
			'error' =>$this->upload->display_errors(),
			'isi' => 'admin/konfigurasi/icon');
$this->load->view('admin/layout/wrapper', $data, FALSE);
}else{
	// proses manipulasi gambar
		$upload_data=array('uploads'=>$this->upload->data());
		// Gambar asli disimpan di folder assets/upload/image
		// lalu gambar asli di copy untuk versi mini size ke folder assets/upload/image/thumbs
				$config['image_library'] = 'gd2';
		$config['source_image'] = './assets/upload/image/'.$upload_data['uploads']['file_name'];
		// gambar versi kecilpindahkan
		$config['new_image']= './assets/upload/image/thumbs/'.$upload_data['uploads']['file_name'];
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width']         = 200;
		$config['height']       = 200;
		$config['thumb_marker']='';

		$this->load->library('image_lib', $config);

		$this->image_lib->resize();


	
		$i=$this->input;
		
		$data = array('Id_Konfigurasi'=>$konfigurasi->Id_Konfigurasi,
					'IdUser' => $this->session->userdata('IdUser'),
					'Icon' => $upload_data['uploads']['file_name']
					 
					
					  );
		$this->konfigurasi_model->edit($data);
		$this->session->set_flashdata('sukses', 'Data telah diubah');
		redirect(base_url('admin/konfigurasi/icon'),'refresh');
			}}
			// End masuk validasi
				$data = array('title' => 'konfigurasi icon website',
			'konfigurasi' =>$konfigurasi,
			'isi' => 'admin/konfigurasi/icon');
$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
}

/* End of file Konfigurasi.php */
/* Location: ./application/controllers/admin/Konfigurasi.php */