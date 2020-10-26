<?php

// extends class Model
class UserM extends CI_Model{

  public function getUser(){
    return $this->db->get('user')->result_array();
  }
  public function getSubkon(){
    $this->db->where('status', 1);
    return $this->db->get('pelaksana')->result_array();
  }

  public function lastUser()
    {   
        $this->db->select('kode_user');
        $this->db->from('user');
        $this->db->order_by('kode_user desc');
        $query = $this->db->get();
        return $query->row();
  }

  public function insertUser($id,$nama,$pass,$level,$kodepel)
    { 
        $user = array(
          'kode_user' => $id,
          'nama' => $nama,
          'pass' => $pass,
          'level' => $level,
          'kode_pelaksana' => $kodepel
        );
        $this->db->insert('user', $user);
  }

  public function updateUser($id,$nama,$pass,$level,$kodepel)
  {
        $user = array(
        'nama' => $nama,
        'pass' => $pass,
        'level' => $level,
        'kode_pelaksana' => $kodepel
        );

        $this->db->where('kode_user', $id);
        $this->db->update('user', $user);
  }

  public function deleteUser($id)
  {
      $this->db->where('kode_user', $id);
      $this->db->delete('user');
  }

}

?>
