<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tbl_hasil extends CI_Controller {

	public function index()
	{
		$this->load->model('tbl_hasildb');
		$data['tampil']=$this->tbl_hasildb->detail();
        $this->load->view('tbl_hasil', $data);
	}
}