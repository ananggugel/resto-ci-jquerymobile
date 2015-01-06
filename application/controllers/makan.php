<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Makan extends CI_Controller {
	
	function index()
	{
		
		$this->load->model('input_mak');
        $data['hasil']=$this->input_mak->detail();
		$this->load->view('makan',$data);

		//berfungsi untuk meload file makan di view		
	}
	
	function simpan(){
		
		
		if ($this->input->post('simpan')){
			
		$this->load->model('input_mak');
			$this->input_mak->simpan();
			redirect('welcome');
		}

		//redirect berfungsi untuk kembali ke view welcome, apabila telah melakukan penyimpanan
		
		$this->load->view('makan');
	}	
}
