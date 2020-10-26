<?php

// extends class Model
class PengaturanM extends CI_Model{
  public function updatePass($id,$pass)
  {
        $data = array(
        'pass' => $pass
        );

        $this->db->where('kode_user', $id);
        $this->db->update('user', $data);
  }

}

?>
