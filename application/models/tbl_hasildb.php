<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tbl_hasildb extends CI_Model {

	function detail(){
		
		$query= "SELECT * FROM tabel_bayar";
        return $this->db->query($query);
	}
	
}

