<?php

// extends class Model
class ProyekM extends CI_Model{

  public function getProyek(){
    return $this->db->get('project')->result_array();
  }
  public function getSubkon(){
    $this->db->where('status', 1);
    return $this->db->get('pelaksana')->result_array();
  }
  public function getItem(){
    return $this->db->get('item')->result_array();
  }

  public function lastProyek()
    {   
        $this->db->select('kode_project');
        $this->db->from('project');
        $this->db->order_by('kode_project desc');
        $query = $this->db->get();
        return $query->row();
  }

  public function lastItem()
    {   
        $this->db->select('kode_item');
        $this->db->from('item');
        $this->db->order_by('kode_item desc');
        $query = $this->db->get();
        return $query->row();
  }

  public function insertProyek($id,$nama,$lokasi,$mulai,$akhir,$nominal)
    { 
        $data = array(
          'kode_project' => $id,
          'nama_project' => $nama,
          'lokasi' => $lokasi,
          'tgl_mulai' => $mulai,
          'tgl_akhir' => $akhir,
          'nominal' => $nominal
        );
        $this->db->insert('project', $data);
  }

  public function updateProyek($id,$nama,$lokasi,$mulai,$akhir,$nominal,$status)
  {
        $data = array(
          'nama_project' => $nama,
          'lokasi' => $lokasi,
          'tgl_mulai' => $mulai,
          'tgl_akhir' => $akhir,
          'nominal' => $nominal,
          'status' => $status
        );

        $this->db->where('kode_project', $id);
        $this->db->update('project', $data);
  }

  public function insertSubkon($pid,$id,$bidang,$subkonpj)
    { 
        $data = array(
          'kode_project' => $pid,
          'kode_pelaksana' => $id,
          'bidang' => $bidang,
          'penanggung_jawab' => $subkonpj
        );
        $this->db->insert('subkon', $data);
  }

  public function insertRpp($pilih,$pid,$id,$nama,$jenis,$satuan,$qty,$harga,$jumlah,$newid)
    { 
      if ($pilih == 1){
        $dataitem = array(
          'kode_item' => $newid,
          'nama_item' => $nama,
          'jenis' => $jenis,
          'satuan' => $satuan
        );
        $data = array(
          'kode_project' => $pid,
          'kode_item' => $newid,
          'qty' => $qty,
          'harga_satuan' => $harga,
          'jumlah' => $jumlah
        );
        $this->db->insert('item', $dataitem);
        $this->db->insert('detil_project', $data);
      } else {
        $data = array(
          'kode_project' => $pid,
          'kode_item' => $id,
          'qty' => $qty,
          'harga_satuan' => $harga,
          'jumlah' => $jumlah
        );
        $this->db->insert('detil_project', $data);
      }
  }

  public function deleteSubkon($pid,$sid)
  {
      $data = array(
        'kode_project' => $pid,
        'kode_pelaksana' => $sid
      );
      $this->db->where($data);
      $this->db->delete('subkon');
  }

  public function deleteRpp($pid,$iid)
  {
      $data = array(
        'kode_project' => $pid,
        'kode_item' => $iid
      );
      $this->db->where($data);
      $this->db->delete('detil_project');
  }

  public function searchJenis($query)
    {   
        $this->db->select('jenis');
        $this->db->from('item');
        $this->db->where('kode_item', $query);
        return $this->db->get();
  }

  public function searchSatuan($query)
    {   
        $this->db->select('satuan');
        $this->db->from('item');
        $this->db->where('kode_item', $query);
        return $this->db->get();
  }

  public function searchSubkon($query)
    {   
        $this->db->select('*');
        $this->db->from('subkon');
        $this->db->where('kode_project', $query);
        $this->db->join('pelaksana','subkon.kode_pelaksana = pelaksana.kode_pelaksana');
        return $this->db->get();
  }

  public function searchItem($query)
    {   
        $this->db->select('*');
        $this->db->from('detil_project');
        $this->db->where('kode_project', $query);
        $this->db->join('item', 'detil_project.kode_item = item.kode_item');
        return $this->db->get();
  }

}

?>
