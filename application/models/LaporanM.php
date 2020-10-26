<?php

// extends class Model
class LaporanM extends CI_Model{

  public function getPelaksana(){
    $this->db->where('status', 1);
    return $this->db->get('pelaksana')->result_array();
  }

  public function getProyek(){
    return $this->db->get('project')->result_array();
  }

  public function selectProyek($proyek)
    {   
        $this->db->select('*');
        $this->db->from('project');
        $this->db->where('project.kode_project', $proyek);
        $this->db->join('detil_project','project.kode_project = detil_project.kode_project');
        $this->db->join('item','detil_project.kode_item = item.kode_item');
        return $this->db->get()->result();
  }

  public function selectPelaksana($subkon,$proyek)
    {   
      $data = array(
        "transaksi.kode_pelaksana" => $subkon,
        "transaksi.kode_project" => $proyek
      );
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->where($data);
        $this->db->join('detil_transaksi','transaksi.no_bukti = detil_transaksi.no_bukti');
        $this->db->join('pelaksana','transaksi.kode_pelaksana = pelaksana.kode_pelaksana');
        $this->db->join('project','transaksi.kode_project = project.kode_project');
        $this->db->join('item','detil_transaksi.kode_item = item.kode_item');
        return $this->db->get();
  }

  public function selectMaterial($awal,$akhir)
    {   
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->where('transaksi.tanggal >=', $awal);
        $this->db->where('transaksi.tanggal <=', $akhir);
        $this->db->where('item.jenis', 'Barang');
        $this->db->join('detil_transaksi','transaksi.no_bukti = detil_transaksi.no_bukti');
        $this->db->join('item','detil_transaksi.kode_item = item.kode_item');
        return $this->db->get();
  }

  public function searchProyek($query)
    {   
        $this->db->select('*');
        $this->db->from('subkon');
        $this->db->where('kode_pelaksana', $query);
        $this->db->join('project', 'project.kode_project = subkon.kode_project');
        return $this->db->get();
  }
}

?>
