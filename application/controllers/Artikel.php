<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
	// Load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('artikel_model');
		$this->load->model('kategori_model');

	}
	// Main page - Artikel
	public function index()
	{
		
		$konfigurasi=$this->konfigurasi_model->listing();
		$artikel=$this->artikel_model->artikelbaru();
	
	
		

		$data=array('title' => $konfigurasi->Nama_Web,
		
			'artikel' =>$artikel,
		
			'konfigurasi'=>$konfigurasi,
			
					'isi'	=> 'artikel/all'
				);
		$this->load->view('layout/wrapper_layout',$data,FALSE);
	
	}
// Kategori Artikel
	public function kategori($slug_kategori)
	{
		$kategori=$this->kategori_model->read($slug_kategori);
		$id_kategori=$kategori->id_kategori;
		$konfigurasi=$this->konfigurasi_model->listing();
		// Listing Artikel dengan paginition
	

		// End listing
		$data=array('kategori' =>'Kategori Artikel - '.$kategori->nama_kategori ,
			'deskripsi' =>'Kategori Artikel - '.$kategori->nama_kategori,
			'keywords' =>'Kategori Artikel - '.$kategori->nama_kategori ,
			'paginasi'=>$this->pagination->create_links(),
			'artikel'=>$artikel,
			'limit'=>$limit,
			'total'=>$config['total_rows'],
					'isi'	=>'artikel/list'
					 );
		$this->load->view('layout/wrapper_layout',$data,FALSE);
	}

	// Detail page - Artikel
	public function read($slug_artikel)
	{
		$artikel=$this->artikel_model->read($slug_artikel);
		$listing=$this->artikel_model->artikelbaru();
		$data=array('title' =>$artikel->Judul_Artikel ,
			'deskrips' =>$artikel->Judul_Artikel ,
			'keywords' =>$artikel->Judul_Artikel ,
			'artikel' =>$artikel,
			'listing' =>$listing,
					'isi'	=>'artikel/read'
					 );
		$this->load->view('layout/wrapper_layout',$data,FALSE);
	}

	public function pencarian()
	{
			$i=$this->input;
		$cari =$i->post('cari');
		
		
		
	

		
		$konfigurasi=$this->konfigurasi_model->listing();
		
		$pencarian=$this->artikel_model->pencarian($cari);
	
	
		

		$data=array('title' => $konfigurasi->Nama_Web,
		
		
			'pencarian' =>$pencarian,
		
			'konfigurasi'=>$konfigurasi,
			
					'isi'	=> 'artikel/list'
				);
		$this->load->view('layout/wrapper_layout',$data,FALSE);
	
	}
}
