 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Input_bay extends CI_Model {

	function detail(){
		$query= "SELECT * FROM tabel_makanan ";
                return $this->db->query($query);		
	}
	
	function simpan()
	{
		$id_bayar=$this->input->post('id_bayar');
		$nama_makanan=$this->input->post('nama_makanan');
		$harga_makanan=$this->input->post('harga_makanan');
		$jumlah_porsi=$this->input->post('jumlah_porsi');
		$total_bayar=$this->input->post('total_bayar');
		
		$data = array(
                
               'id_bayar' => $id_bayar,
               'nama_makanan' => $nama_makanan,
               'harga_makanan' => $harga_makanan,
               'jumlah_porsi' => $jumlah_porsi,
               'total_bayar' => $total_bayar
            );

            $this->db->insert('tabel_bayar', $data);
            if ($this->db->affected_rows())
		return '1';
		else
		return '0';
	
	}
}
