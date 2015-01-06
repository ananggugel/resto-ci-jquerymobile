<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bayar extends CI_Controller {

	public function index()
	{
		$this->load->model('input_bay');
		$data['tampil']=$this->input_bay->detail();
        $this->load->view('bayar', $data);
               
	}

	function simpan() {
		
		if ($this->input->post('simpan')){
			
		$this->load->model('input_bay');
			$this->input_bay->simpan();
			redirect('tbl_hasil');
		}
		
		$this->load->model('input_bay');
		$data['tampil']=$this->input_bay->detail();
        $this->load->view('tbl_hasil', $data);
	}
	
	
}