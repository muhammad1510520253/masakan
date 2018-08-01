<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check_login
{
	protected $CI;

	public function __construct()
	{
        $this->CI =& get_instance();
	}

	// check login
	public function check(){
		if($this->CI->session->userdata('sername')==""&&$this->CI->session->userdata('Hak_Akses')==""){
			$this->CI->session->set_flashdata('sukses','Anda belum login');
			redirect(base_url('login'),'refresh');
		}

	
	}

		public function checkout(){
		if($this->CI->session->userdata('sername')!=""&&$this->CI->session->userdata('Hak_Akses')!=""){
			$this->CI->session->set_flashdata('sukses','Anda sudah login');
			redirect(base_url('admin/dasbor'),'refresh');
		}
	}
	//logput
	public function logout(){
		$this->CI->session->unset_userdata('IdUser');
		$this->CI->session->unset_userdata('Username');
		$this->CI->session->unset_userdata('Nama');
		$this->CI->session->unset_userdata('Hak_Akses');
		$this->CI->session->set_flashdata('sukses','Anda berhasil Logout');
				redirect(base_url('login'),'refresh');
	} 

}

/* End of file Check_login.php */
/* Location: ./application/libraries/Check_login.php */
