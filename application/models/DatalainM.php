<?php

// extends class Model
class DatalainM extends CI_Model{

  public function getItem(){
    return $this->db->get('item')->result_array();
  }

  public function getSandi(){
    return $this->db->get('sandi_transaksi')->result_array();
  }

}

?>
