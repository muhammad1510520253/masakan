<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
// Load Database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('artikel_model');
		$this->load->model('kategori_model');
	}
	public function index()
	{
		$this->check_login->check();
		
		$artikel =$this->artikel_model->listing();
		

		
		  
		$data=array(


			'title' => 'Data Artikel ',

			
			'artikel' =>$artikel,
			'isi' =>'admin/artikel/list'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
	// Tambah Artikel
	public function tambah()
	{

		$kategori=$this->kategori_model->listing();

		// validasi
		$valid=$this->form_validation;
		$valid->set_rules('judul_artikel','Judul artikel','required',
			array('required' => '%s harus diisi'));
		$valid->set_rules('isi_artikel','Isi artikel','required',
			array('required' => '%s harus diisi'));

		if ($valid->run()) {
			   $config['upload_path']          = './assets/upload/image/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 5000;
                $config['max_width']            = 5000;
                $config['max_height']           = 5000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('gambar')){

			// End validasi
		
	
		$data=array('title' => 'Tambah Artikel',
			'kategori' =>$kategori,
			'error_upload'=> $this->upload->display_errors(),
			'isi' =>'admin/artikel/tambah'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// Masuk database
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
			$nilai;
					  	if ($this->session->userdata('Hak_Akses')=="Penulis" ) {
					  		$nilai='0';
					  	}else{
					  		$nilai='1';
					  	}

		$i=$this->input;
		$data = array('IdUser' =>$this->session->userdata('IdUser'),
					  'Id_Kategori' =>$i->post('id_kategori'),
					  'Slug_Artikel' =>url_title($this->input->post('judul_artikel'), 'dash', TRUE),
			  	      'Judul_Artikel' =>$i->post('judul_artikel'),
					  'Isi_Artikel' =>$i->post('isi_artikel'),
					  	'Gambar' => $upload_data['uploads']['file_name'],
					  	'Status_Artikel'=>$i->post('status_artikel'),
					  	'keywords'=>$i->post('keywords'),
					  
				  		'Konfirmasi'=>$nilai,
				  		'Tanggal_Post' =>date('Y-m-d H:i:s')
					  );
		$this->artikel_model->tambah($data);
		$this->session->set_flashdata('sukses', 'Data telah ditambah');
		redirect(base_url('admin/artikel'),'refresh');
	}}
	// End masuk database

		$data=array('title' => 'Tambah Artikel',
			'kategori' =>$kategori,
			'isi' =>'admin/artikel/tambah'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Edit Artikel

	public function edit($Id_Artikel)
	{
		$artikel=$this->artikel_model->detail($Id_Artikel);

		$kategori=$this->kategori_model->listing();

		// validasi
		$valid=$this->form_validation;
		$valid->set_rules('judul_artikel','Judul artikel','required',
			array('required' => '%s harus diisi'));
		$valid->set_rules('isi_artikel','Isi artikel','required',
			array('required' => '%s harus diisi'));

		if ($valid->run()) {
			// Kalau tidak ganti gambar
			if(!empty($FILES['gambar']['name'])){
			   $config['upload_path']          = './assets/upload/image/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 5000;
                $config['max_width']            = 5000;
                $config['max_height']           = 5000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('gambar')){

			// End validasi
		
	
		$data=array('title' => 'Edit Artikel',
			'kategori' =>$kategori,
			'artikel' =>$artikel,
			'error_upload'=> $this->upload->display_errors(),
			'isi' =>'admin/artikel/edit'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// Masuk database
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

		// hapus gambar lama jika ada upload gambar baru

		if($artikel->gambar != ""){
			unlink('./assets/upload/image/'.$artikel->gambar);
			unlink('./assets/upload/image/thumbs/'.$artikel->gambar);
			
		}
		// end hapus gambar
		$data = array('Id_Artikel' =>$Id_Artikel,
			'IdUser' =>$this->session->userdata('IdUser'),
					  'Id_Kategori' =>$i->post('Id_Kategori'),
					  'Slug_Artikel' =>url_title($this->input->post('judul_artikel'), 'dash', TRUE),
			  	      'Judul_Artikel' =>$i->post('judul_artikel'),
					  'Isi_Artikel' =>$i->post('isi_artikel'),
					  	'Gambar' => $upload_data['uploads']['file_name'],
					  	'Status_Artikel'=>$i->post('status_artikel'),
					  	'Keywords'=>$i->post('keywords'),
				  		
				  		
					  );
		$this->artikel_model->edit($data);
		$this->session->set_flashdata('sukses', 'Data telah diedit');
		redirect(base_url('admin/artikel'),'refresh');
	}}else{
// update artikel tanpa ganti gambar baru
		$i=$this->input;
		

		$data = array('Id_Artikel' =>$Id_Artikel,
			
					  'Id_Kategori' =>$i->post('id_kategori'),
					  'Slug_Artikel' =>url_title($this->input->post('judul_artikel'), 'dash', TRUE),
			  	      'Judul_Artikel' =>$i->post('judul_artikel'),
					  'Isi_Artikel' =>$i->post('isi_artikel'),
					  	'Status_Artikel'=>$i->post('status_artikel'),
					  	'Keywords'=>$i->post('keywords'),
				  		
				  		
					  );
		$this->artikel_model->edit($data);
		$this->session->set_flashdata('sukses', 'Data telah diedit');
		redirect(base_url('admin/artikel'),'refresh');
	}}
	// End masuk database

		$data=array('title' => 'Edit Artikel',
			'kategori' =>$kategori,
			'artikel'=>$artikel,
			'isi' =>'admin/artikel/edit'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Delete artikel
	public function delete($Id_Artikel)
	{
		// proteksi delete
		$this->check_login->check();

		$artikel=$this->artikel_model->detail($Id_Artikel);
		// Hapus gambar
		if($artikel->Gambar != ""){
			unlink('./assets/upload/image/'.$artikel->Gambar);
			unlink('./assets/upload/image/thumbs/'.$artikel->Gambar);
			
		}
		// end hapus gambar
		$data= array('Id_Artikel' => $artikel->Id_Artikel);
		$this->artikel_model->delete($data);
		$this->session->flashdata('sukses','Data telah dihapus');
		redirect(base_url('admin/artikel'),'refresh');

	}

	public function konfirmasi($Id_Artikel){
			$artikel=$this->artikel_model->detail($Id_Artikel);
		$data = array('Id_Artikel' =>$Id_Artikel,
					  	'Konfirmasi'=>1,
				  		'Tanggal_Post' =>date('Y-m-d H:i:s')
				  		
					  );
		$this->artikel_model->edit($data);
		redirect(base_url('admin/artikel'),'refresh');
	}
	public function publish($Id_Artikel){
			$artikel=$this->artikel_model->detail($Id_Artikel);
		$data = array('Id_Artikel' =>$Id_Artikel,
					  	'Status_Artikel'=>'Publish' ,
					  	'Tanggal_Post' =>date('Y-m-d H:i:s')
				  		
				  		
					  );
		$this->artikel_model->edit($data);
		redirect(base_url('admin/artikel'),'refresh');
	}



}

/* End of file Artikel.php */
/* Location: ./application/controllers/admin/Artikel.php */