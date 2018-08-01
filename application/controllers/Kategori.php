<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('artikel_model');
		$this->load->model('konfigurasi_model');
	
	
	}
	// Main page - Homepage
	public function index()
	{
		$konfigurasi=$this->konfigurasi_model->listing();
		$artikel=$this->artikel_model->home();
		$kategori=$this->konfigurasi_model->menu_artikel();
	
		$slider=$this->artikel_model->slider();
		$data=array('title' => $konfigurasi->Nama_Web,
			
			'artikel' =>$artikel,
		
			'slider' => $slider,
			'kategori' => $kategori,
			

			'konfigurasi'=>$konfigurasi,
					'isi'	=> 'kategori/list'
				);
		$this->load->view('layout/wrapper_layout',$data,FALSE);
	}
		public function artikel_kategori($slug_artikel)
	{
		$konfigurasi=$this->konfigurasi_model->listing();
		$artikel=$this->artikel_model->artikel_kategori($slug_artikel);
		$kategori=$this->konfigurasi_model->menu_artikel();
	
		$slider=$this->artikel_model->slider();
		$data=array('title' => $konfigurasi->Nama_Web,
			
			'artikel' =>$artikel,
		
			'slider' => $slider,
			'kategori' => $kategori,
			

			'konfigurasi'=>$konfigurasi,
					'isi'	=> 'kategori/artikel_kategori'
				);
		$this->load->view('layout/wrapper_layout',$data,FALSE);
	}
	public function read($slug_artikel)
	{
		

		$artikel=$this->artikel_model->read($slug_artikel);
		$listing=$this->artikel_model->artikelbaru();
		$data=array('title' =>$artikel->Judul_Artikel ,
			'deskrips' =>$artikel->Judul_Artikel ,
			'keywords' =>$artikel->Judul_Artikel ,
			'artikel' =>$artikel,
			'listing' =>$listing,
					'isi'	=>'kategori/read'
					 );
		$this->load->view('layout/wrapper_layout',$data,FALSE);
	}
}
