<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <?php $this->load->view("partials/breadcrumb.php") ?>
    </div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
        <div style="height: 20px;"></div>
        <?= $this->session->flashdata('message'); ?>
			</div>
		</div><!--/.row-->
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body tabs">
                  <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab1">
                      <div class="col-md-8">
                        <button type="button" name="add" id="add" class="btn btn-outline-info btn-success" data-toggle="modal" data-target="#addt"><i class="fa fa-plus"> </i> Tambah Transaksi</button>
                        <br/><br/><p class="text-danger">Pastikan transaksi benar sebelum menambahkan item transaksi.</p>
                      </div>
                      <div class="col-md-4" align="right">
                        <button type="button" name="report" id="report" class="btn btn-outline-info btn-warning" data-toggle="modal" data-target="#rt"><i class="fa fa-print"></i> Laporan Belanja Material</button>
                      </div>
                      <table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="nama" data-sort-order="asc">
                          <thead>
                          <tr>
                            <th data-field="id" data-sortable="true">No Bukti</th>
                            <th data-field="pelaksana" data-sortable="true">Pelaksana</th>
                            <th data-field="proyek"  data-sortable="true">Proyek</th>
                            <th data-field="transaksi" data-sortable="true">Transaksi</th>
                            <th data-field="tanggal" data-sortable="true">Tanggal</th>
                            <th data-field="jenis" data-sortable="false">Jenis</th>
                            <th data-field="total" data-sortable="false">Total</th>
                            <th data-field="aksi" data-sortable="false">Aksi</th>
                          </tr>
                          </thead>
                          <tbody>
                              <?php foreach ($data as $prd) : ?>
                              <tr>
                                  <td><?= $prd['no_bukti'] ?></td>
                                  <td><?= $prd['nama_pelaksana'] ?></td>
                                  <td><?= $prd['nama_project'] ?></td>
                                  <td><?= $prd['nama_sandi'] ?></td>
                                  <td><?= $prd['tanggal'] ?></td>
                                  <td><?= $prd['jenis'] ?></td>
                                  <td><?= $prd['total'] ?></td>
                                  <td>
                                  <button type="button" name="del" id="del" class="btn btn-outline-info btn-danger" data-toggle="modal" data-target="#delt" data-id="<?= $prd['no_bukti'] ?>" onclick="return delt(this)">
                                      <i class="fa fa-trash"> </i>
                                  </button>
                                  <button type="button" title="Tambah Item Transaksi!" name="dt" id="dt" class="btn btn-outline-info btn-success" data-toggle="modal" data-target="#adddt" data-tid="<?= $prd['no_bukti'] ?>" data-pid="<?= $prd['kode_project'] ?>" onclick="return dt(this)">
                                      <i class="fa fa-plus"> </i>
                                  </button>
                                  <button type="button" href="#tab2" data-toggle="tab" title="<?= $prd['kode_pelaksana'] ?>" name="<?= $prd['kode_project'] ?>" id="<?= $prd['no_bukti'] ?>" class="btn btn-outline-info btn-default" onclick="return detil(this, id, name, title)">
                                      <i class="fa fa-search"> </i> Detil
                                  </button>
                                  </td>
                              </tr>
                              <?php endforeach ?>
                          </tbody>
                      </table>
                    </div>
                    <div class="tab-pane fade" id="tab2">
                      <div class="col-md-6">
                        <button type="button" href="#tab1" data-toggle="tab" name="back" id="back" class="btn btn-outline-info btn-success">
                            <i class="fa fa-reply"> </i> Kembali
                        </button><br/><br/>
                      </div>
                      <form action="laporan/subkon" method="POST" name="laporansubkon">
                      <div class="col-md-4">
                        <input type="text" class="form-control" name="dtid" id="dtid" readonly>
                        <input type="hidden" name="pelaksanaid" id="pelaksanaid">
                        <input type="hidden" name="proyekid" id="proyekid">
                      </div>
                      <div class="col-md-2">
                        <button type="submit" class="btn btn-warning"><i class="fa fa-print"></i> Print Laporan</button>
                      </div>
                      </form>
                      <table data-toggle="table">
                          <thead>
                          <tr>
                              <th data-field="dtid">Nota</th>
                              <th data-field="dtitem">Item</th>
                              <th data-field="dtketerangan">Keterangan</th>
                              <th data-field="dtqty">Qty</th>
                              <th data-field="dtharga">Harga</th>
                              <th data-field="dtjumlah">Jumlah</th>
                              <th data-field="dthapus">Hapus</th>
                          </tr>
                          </thead>
                          <tbody id="datadt">
                          </tbody>
                      </table>
                    </div>
                    <div class="tab-pane fade" id="tab3">
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div><!--/.row-->
</div>	<!--/.main-->

  <!-- Modal Delete -->
  <div class="modal fade" id="delt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title text-primary" id="exampleModalLabel">Delete Transaksi</h4>
        </div>
        <form action="transaksi/delete" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label for="role">Apakah anda yakin menghapus transaksi ini?</label>
              <input type="hidden" class="form-control" id="deltid" name="deltid">
            </div>
            <div class="form-group">
              <p class="text-warning">Termasuk menghapus item transaksi.</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Tidak</button>
            <input type="submit" class="btn btn-danger" name="deleteuser" value="Ya"></input>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal tambah -->
  <div class="modal fade" id="addt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title text-primary" id="exampleModalLabel">Tambah Transaksi</h4>
        </div>
        <form action="transaksi/add" method="POST" name="add">
        <div class="modal-body">
          <div class="form-group">
            <label for="pelaksana">Pelaksana</label>
            <select class="selectpicker form-control" name="pelaksanaid" id="pelaksanaid" data-live-search="true" onchange="return changepel(this)" required>
              <option value=""></option>
              <?php foreach ($datapelaksana as $prd) : ?>
              <option value="<?= $prd['kode_pelaksana'] ?>"><?= $prd['nama_pelaksana'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="form-group">
            <label for="sandi">Transaksi</label>
            <select class="selectpicker form-control" name="sandiid" id="sandiid" data-live-search="true" required>
              <?php foreach ($datasandi as $prd) : ?>
              <option value="<?= $prd['kode_sandi'] ?>"><?= $prd['nama_sandi'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="form-group">
            <label for="proyek">Untuk Proyek</label>
            <select class="selectpicker form-control" name="proyekid" id="proyekid" data-live-search="true" onchange="return changepro(this)">
            </select>
            <p class="text-warning">Opsional</p>
          </div>
          <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" id="tanggal" required>
          </div>
          <div class="form-group">
            <label for="jenis">Jenis</label>
            <div class="form-control">
            <input type="radio" name="jenis" id="jenis" value="Internal" required> Internal &ensp;
            <input type="radio" name="jenis" id="jenis" value="Subkon" required> Subkon
            </div>
          </div>
          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control" name="kett" id="kett"></textarea>
          </div>
          <div class="form-group">
            <label for="harga">Sebesar</label>
            <input type="text" class="form-control" name="sebesar" id="sebesar" placeholder="Rp." required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-success" name="adduser" value="Simpan"></input>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal tambah item transaksi -->
  <div class="modal fade" id="adddt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title text-primary" id="exampleModalLabel">Tambah Item Transaksi</h4>
        </div>
        <form action="transaksi/item" method="POST" name="additem">
        <div class="modal-body">
          <div class="form-group">
            <label for="nota">Nomer Nota</label>
            <input type="hidden" name="tid" id="tid">
            <input type="hidden" name="pid" id="pid">
            <input type="text" class="form-control" name="nota" id="nota">
            <p class="text-warning">Kosongi jika tidak ada.</p>
          </div>
          <div class="form-group">
            <div class="form-control">
            <input type="radio" name="pilihitem" id="pilihitem" value="0" onclick="selectlama(this)" checked required> Item lama &ensp;
            <input type="radio" name="pilihitem" id="pilihitem" value="1" onclick="selectbaru(this)" required> Item baru
            </div>
            <p class="text-warning">Jika item belum tersedia pilih item baru.</p>
          </div>
          <div class="form-group">
            <label for="itemnama">Nama item</label>
            <select class="selectpicker form-control" name="itemid" id="itemid" data-live-search="true" onchange="return chitem(this)" required>
              <option value=""></option>
              <?php foreach ($dataitem as $prd) : ?>
              <option value="<?= $prd['kode_item'] ?>"><?= $prd['nama_item'] ?></option>
              <?php endforeach ?>
            </select>
            <input type="text" class="form-control" name="itemnama" id="itemnama" placeholder="Item baru..." disabled>
          </div>
          <div class="form-group">
            <label for="itemjenis">Jenis</label>
            <select class="form-control" name="itemjenis" id="itemjenis" disabled>
              <option value=""></option>
              <option value="Barang">Barang</option>
              <option value="Jasa">Jasa</option>
            </select>
          </div>
          <div class="form-group">
            <label for="itemsatuan">Satuan</label>
            <input type="text" class="form-control" name="itemsatuan" id="itemsatuan" disabled>
          </div>
          <div class="form-group">
            <label for="qty">Qty</label>
            <input type="number" step="0.01" class="form-control" name="qty" id="qty" placeholder="0.00" required>
          </div>
          <div class="form-group">
            <label for="harga">Harga satuan</label>
            <input type="text" class="form-control" name="harga" id="harga" placeholder="Rp." required>
          </div>
          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control" name="ketitem" id="ketitem"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-success" name="adduser" value="Simpan"></input>
        </div>
        </form>
      </div>
    </div>
  </div>

<!-- Modal Delete item -->
<div class="modal fade" id="delitem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-primary" id="exampleModalLabel">Delete Item Transaksi</h4>
      </div>
      <form action="transaksi/delitem" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="role">Apakah anda yakin menghapus item transaksi ini?</label>
            <input type="hidden" class="form-control" id="deldtid" name="deldtid">
            <input type="hidden" class="form-control" id="deldiid" name="deldiid">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Tidak</button>
          <input type="submit" class="btn btn-danger" name="deleteuser" value="Ya"></input>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Laporan -->
<div class="modal fade" id="rt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-primary" id="exampleModalLabel">Laporan Belanja Material</h4>
      </div>
      <form action="laporan/material" method="post" name="laporanmterial">
        <div class="modal-body">
          <div class="form-group">
            <label for="pelaksana">Awal Transaksi</label>
            <input type="date" class="form-control" name="awal" id="awal" required>
          </div>
          <div class="form-group">
            <label for="proyek">Akhir Transaksi</label>
            <input type="date" class="form-control" name="akhir" id="akhir" required>
          </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-warning" name="cetak" id="cetak"><i class="fa fa-print"></i> Cetak</button>
        </div>
      </form>
    </div>
  </div>
</div>

  <script>
    function delt(){
    $('#delt').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var id = button.data('id')
      var modal = $(this)
      modal.find('.modal-title').text('Delete Transaksi ' + id)
      modal.find('.modal-body #deltid').val(id)
    })
    }
  </script>

  <script>
    function dt(){
    $('#adddt').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var tid = button.data('tid')
      var pid = button.data('pid')

      var modal = $(this)
      modal.find('.modal-title').text('Tambah Item ' + tid)
      modal.find('.modal-body #tid').val(tid)
      modal.find('.modal-body #pid').val(pid)
    })
    }
  </script>

  <script>
    function deldt(){
    $('#delitem').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var tid = button.data('tid')
      var iid = button.data('iid')
      var nama = button.data('nama')
      var modal = $(this)
      modal.find('.modal-title').text('Delete ' + nama + ' dari transaksi')
      modal.find('.modal-body #deldtid').val(tid)
      modal.find('.modal-body #deldiid').val(iid)
    })
    }
  </script>

<script>
	function loadproyek(query)
	{
		$.ajax({
			url:"transaksi/selectProyek",
			method:"POST",
			data:{query:query},
			success:function(data){
				$('#proyekid').html(data).selectpicker('refresh');
			}
		})
  }

  function changepel(event){
    var pel = document.getElementById("pelaksanaid");
    var kode = pel.options[pel.selectedIndex].value;
    loadproyek(kode);
  }
  function changepro(event){
    var pel = document.getElementById("proyekid");
    var kode = pel.options[pel.selectedIndex].value;
    document.getElementById("proyekid").val(kode);
    alert(kode);
  }
</script>

<script>
	function load_data(query)
	{
		$.ajax({
			url:"transaksi/select",
			method:"POST",
			data:{query:query},
			success:function(data){
				$('#datadt').html(data);
			}
		})
  }
  
  function detil(event,id,name,title){
    document.getElementById("dtid").value = "Transaksi "+id;
    document.getElementById("pelaksanaid").value = title;
    document.getElementById("proyekid").value = name;
    load_data(id);
  }
</script>

<script>
	function loadjenis(query)
	{
		$.ajax({
			url:"transaksi/selectJenis",
			method:"POST",
			data:{query:query},
			success:function(data){
				$('#itemjenis').val(data);
			}
		})
  }
	function loadsatuan(query)
	{
		$.ajax({
			url:"transaksi/selectSatuan",
			method:"POST",
			data:{query:query},
			success:function(data){
				$('#itemsatuan').val(data);
			}
		})
  }
  
  function chitem(event){
    var it = document.getElementById("itemid");
    var kode = it.options[it.selectedIndex].value;
    loadjenis(kode);
    loadsatuan(kode);
  }
</script>

  <script>
    function selectlama(){
        document.getElementById("itemid").disabled = false;
        document.getElementById("itemnama").disabled = true;
        document.getElementById("itemjenis").disabled = true;
        document.getElementById("itemsatuan").disabled = true;
        document.getElementById("itemnama").required = false;
        document.getElementById("itemjenis").required = false;
        document.getElementById("itemsatuan").required = false;
    }
    function selectbaru(){
        document.getElementById("itemid").disabled = true;
        document.getElementById("itemnama").disabled = false;
        document.getElementById("itemjenis").disabled = false;
        document.getElementById("itemsatuan").disabled = false;
        document.getElementById("itemnama").required = true;
        document.getElementById("itemjenis").required = true;
        document.getElementById("itemsatuan").required = true;
    }
  </script>