<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
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
	
		$slider=$this->artikel_model->slider();
		$data=array('title' => $konfigurasi->Nama_Web,
			
			'artikel' =>$artikel,
		
			'slider' => $slider,
			

			'konfigurasi'=>$konfigurasi,
					'isi'	=> 'home/list'
				);
		$this->load->view('layout/wrapper_layout',$data,FALSE);
	}
}
