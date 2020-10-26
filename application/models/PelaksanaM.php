<?php

// extends class Model
class PelaksanaM extends CI_Model{

  public function getPelaksana(){
    return $this->db->get('pelaksana')->result_array();
  }

  public function lastPelaksana()
    {   
        $this->db->select('kode_pelaksana');
        $this->db->from('pelaksana');
        $this->db->order_by('kode_pelaksana desc');
        $query = $this->db->get();
        return $query->row();
  }

  public function insertPelaksana($id,$nama,$alamat,$telpon)
    { 
        $data = array(
          'kode_pelaksana' => $id,
          'nama_pelaksana' => $nama,
          'alamat' => $alamat,
          'telpon' => $telpon
        );
        $this->db->insert('pelaksana', $data);
  }

  public function updatePelaksana($id,$nama,$alamat,$telpon,$status)
  {
        $data = array(
        'nama_pelaksana' => $nama,
        'alamat' => $alamat,
        'telpon' => $telpon,
        'status' => $status
        );

        $this->db->where('kode_pelaksana', $id);
        $this->db->update('pelaksana', $data);
  }

}

?>
