<?php

// extends class Model
class TransaksiM extends CI_Model{

  public function getTransaksi(){
    $this->db->select('*');
    $this->db->from('transaksi');
    $this->db->join('project','transaksi.kode_project = project.kode_project');
    $this->db->join('pelaksana','transaksi.kode_pelaksana = pelaksana.kode_pelaksana');
    $this->db->join('sandi_transaksi','transaksi.kode_sandi = sandi_transaksi.kode_sandi');
    return $this->db->get()->result_array();
  }
  public function getProyek(){
    return $this->db->get('project')->result_array();
  }
  public function getPelaksana(){
    $this->db->where('status', 1);
    return $this->db->get('pelaksana')->result_array();
  }
  public function getSandi(){
    return $this->db->get('sandi_transaksi')->result_array();
  }
  public function getItem(){
    return $this->db->get('item')->result_array();
  }

  public function lastTransaksi()
    {   
        $this->db->select('no_bukti');
        $this->db->from('transaksi');
        $this->db->order_by('tgl_add desc');
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

  public function getSaldo(){
      $this->db->select('saldokas');
      $this->db->from('counter');
      $this->db->order_by('no desc');
      $query = $this->db->get();
      return $query->row();
  }

  public function insertTransaksi($id,$proyek,$pelaksana,$sandi,$tanggal,$jenis,$keterangan,$sebesar,$mutasi,$saldo,$lt,$user,$now)
    { 

      if ($mutasi == 'DEBET'){
        $saldo = $saldo+$sebesar;
        $activity = array(
          'no_bukti' => $id,
          'kode_project' => $proyek,
          'kode_pelaksana' => $pelaksana,
          'kode_sandi' => $sandi,
          'tanggal' => $tanggal,
          'keterangan' => $keterangan,
          'jumlah' => $sebesar,
          'debet' => $sebesar,
          'saldo' => $saldo,
          'loguser' => $user
        );
      } elseif ($mutasi == 'KREDIT'){
        $saldo = $saldo-$sebesar;
        $activity = array(
          'no_bukti' => $id,
          'kode_project' => $proyek,
          'kode_pelaksana' => $pelaksana,
          'kode_sandi' => $sandi,
          'tanggal' => $tanggal,
          'keterangan' => $keterangan,
          'jumlah' => $sebesar,
          'kredit' => $sebesar,
          'saldo' => $saldo,
          'loguser' => $user
        );
      } else {
        $activity = array(
          'no_bukti' => $id,
          'kode_project' => $proyek,
          'kode_pelaksana' => $pelaksana,
          'kode_sandi' => $sandi,
          'tanggal' => $tanggal,
          'keterangan' => $keterangan,
          'jumlah' => $sebesar,
          'saldo' => $saldo,
          'loguser' => $user
        );
      } $this->db->insert('activity', $activity);

      if ($sandi == '01KM'){
        $counter = array('kasmasuk' => $lt, 'saldokas' => $saldo);
      } elseif ($sandi == '02KK'){
        $counter = array('kaskeluar' => $lt, 'saldokas' => $saldo);
      } elseif ($sandi == '03PB'){
        $counter = array('pindahbuku' => $lt, 'saldokas' => $saldo);
      } elseif ($sandi == '04BM'){
        $counter = array('bankmasuk' => $lt, 'saldokas' => $saldo);
      } elseif ($sandi == '05BK'){
        $counter = array('bankkeluar' => $lt, 'saldokas' => $saldo);
      } elseif ($sandi == '06HU'){
        $counter = array('hutang' => $lt, 'saldokas' => $saldo);
      } elseif ($sandi == '07PU'){
        $counter = array('piutang' => $lt, 'saldokas' => $saldo);
      } $this->db->insert('counter', $counter);

      $data = array(
        'no_bukti' => $id,
        'kode_project' => $proyek,
        'kode_pelaksana' => $pelaksana,
        'kode_sandi' => $sandi,
        'tanggal' => $tanggal,
        'jenis' => $jenis,
        'tgl_add' => $now,
        'posted' => 'Y'
      );
      $this->db->insert('transaksi', $data);
  }

  public function selectTransaksi($tid)
    {   
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->where('kode_transaksi', $tid);
        return $this->db->get();
  }

  public function selectMutasi($sandi)
    {   
        $this->db->select('mutasi');
        $this->db->from('sandi_transaksi');
        $this->db->where('kode_sandi', $sandi);
        return $this->db->get();
  }

  public function deleteTransaksi($id,$lt,$saldo,$pid,$sid,$jumlah,$mutasi)
    {
      $this->db->set('realisasi', 0);
      $this->db->where('kode_project', $pid);
      $this->db->update('detil_project');

      $this->db->set('realisasi', 0);
      $this->db->where('kode_project', $pid);
      $this->db->update('project');

      if ($mutasi == 'DEBET'){
        $saldo = $saldo-$jumlah;
      } elseif ($mutasi == 'KREDIT'){
        $saldo = $saldo+$jumlah;
      } else {
        $saldo = $saldo;
      }
      
      if ($sid == '01KM'){
        $counter = array('kaskeluar' => $lt, 'saldokas' => $saldo);
      } elseif ($sid == '02KK'){
        $counter = array('kasmasuk' => $lt, 'saldokas' => $saldo);
      } elseif ($sid == '03PB'){
        $counter = array('pindahbuku' => $lt, 'saldokas' => $saldo);
      } elseif ($sid == '04BM'){
        $counter = array('bankkeluar' => $lt, 'saldokas' => $saldo);
      } elseif ($sid == '05BK'){
        $counter = array('bankmasuk' => $lt, 'saldokas' => $saldo);
      } elseif ($sid == '06HU'){
        $counter = array('piutang' => $lt, 'saldokas' => $saldo);
      } elseif ($sid == '07PU'){
        $counter = array('hutang' => $lt, 'saldokas' => $saldo);
      } $this->db->insert('counter', $counter);

        $this->db->where('no_bukti', $id);
        $this->db->delete(array('transaksi','detil_transaksi','activity'));
  }

  public function getTotal($tid){
      $this->db->select('total');
      $this->db->from('transaksi');
      $this->db->where('no_bukti', $tid);
      return $this->db->get();
  }

  public function insertDetil($tid,$pid,$nota,$pilih,$id,$nama,$jenis,$satuan,$qty,$harga,$jumlah,$keterangan,$newid,$total,$user)
    { 
      if ($pilih == 1){
        $dataitem = array(
          'kode_item' => $newid,
          'nama_item' => $nama,
          'jenis' => $jenis,
          'satuan' => $satuan
        );
        $this->db->insert('item', $dataitem);
        $id = $newid;
      }

      $this->db->set('total', $total);
      $this->db->where('no_bukti', $tid);
      $this->db->update('transaksi');

      $pitem = array('kode_project' => $pid, 'kode_item' => $id);
      $this->db->set('realisasi', $jumlah);
      $this->db->where($pitem);
      $this->db->update('detil_project');

      $this->db->set('realisasi', $total);
      $this->db->where('kode_project', $pid);
      $this->db->update('project');

      $data = array(
        'no_bukti' => $tid,
        'no_referensi_nota' => $nota,
        'kode_item' => $id,
        'keterangan' => $keterangan,
        'qty' => $qty,
        'harga' => $harga,
        'jumlah' => $jumlah,
        'loguser' => $user
      );
      $this->db->insert('detil_transaksi', $data);
  }

  public function deleteItem($tid,$iid,$pid,$total,$jumlah)
  {
    $total = $total-$jumlah;
    $jumlah = 0;

    $this->db->set('total', $total);
    $this->db->where('no_bukti', $tid);
    $this->db->update('transaksi');

    $pitem = array('kode_project' => $pid, 'kode_item' => $iid);
    $this->db->set('realisasi', $jumlah);
    $this->db->where($pitem);
    $this->db->update('detil_project');

    $this->db->set('realisasi', $total);
    $this->db->where('kode_project', $pid);
    $this->db->update('project');

      $data = array(
        'no_bukti' => $tid,
        'kode_item' => $iid
      );
      $this->db->where($data);
      $this->db->delete('detil_transaksi');
  }

  public function getAt($tid){
    $this->db->select('*');
    $this->db->from('activity');
    $this->db->where('no_bukti', $tid);
    return $this->db->get();
  }

  public function getDt($tid){
    $this->db->select('*');
    $this->db->from('transaksi');
    $this->db->where('no_bukti', $tid);
    return $this->db->get();
  }

  public function getIt($tid,$iid){
    $data = array('no_bukti' => $tid, 'kode_item' => $iid);
    $this->db->select('*');
    $this->db->from('detil_transaksi');
    $this->db->where($data);
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

  public function searchDetil($query)
    {   
        $this->db->select('*');
        $this->db->from('detil_transaksi');
        $this->db->where('no_bukti', $query);
        $this->db->join('item', 'detil_transaksi.kode_item = item.kode_item');
        return $this->db->get();
  }

}

?>
