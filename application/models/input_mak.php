<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Input_mak extends CI_Model {

	function detail(){
			
	}
	
	function simpan()
	{
		$id_makanan=$this->input->post('id_makanan');
		$nama=$this->input->post('nama_makanan');
		$data = array( 
               'id_makanan' => $id_makanan,
               'nama_makanan' => $nama
            );

            $this->db->insert('tabel_makanan', $data);
            if ($this->db->affected_rows())
            return '1';
        else
        return '0';
	}
}
