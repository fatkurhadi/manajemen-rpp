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
                    <button type="button" name="add" id="add" class="btn btn-outline-info btn-success" data-toggle="modal" data-target="#adduser"><i class="fa fa-plus"> </i> Tambah Proyek</button>
                    <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="nama" data-sort-order="asc">
                        <thead>
                        <tr>
                          <th data-field="id" data-sortable="true">Kode Proyek</th>
                          <th data-field="nama"  data-sortable="true">Nama Proyek</th>
                          <th data-field="mulai" data-sortable="true">Tanggal Mulai</th>
                          <th data-field="akhir" data-sortable="true">Tanggal Akhir</th>
                          <th data-field="lokasi" data-sortable="true">Lokasi</th>
                          <th data-field="status" data-sortable="false">Status</th>
                          <th data-field="nominal" data-sortable="false">Nominal</th>
                          <th data-field="realisasi" data-sortable="false">Realisasi</th>
                          <th data-field="aksi" data-sortable="false">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $prd) : ?>
                            <tr>
                                <td><?= $prd['kode_project'] ?></td>
                                <td><?= $prd['nama_project'] ?></td>
                                <td><?= $prd['tgl_mulai'] ?></td>
                                <td><?= $prd['tgl_akhir'] ?></td>
                                <td><?= $prd['lokasi'] ?></td>
                                <td><?php if ($prd['status'] == 0){echo "Belum dimulai";} elseif ($prd['status'] == 1) {echo "Dikerjakan";} elseif ($prd['status'] == 2){echo "Selesai";} else {echo "Macet/Masalah";} ?></td>
                                <td><?= $prd['nominal'] ?></td>
                                <td><?= $prd['realisasi'] ?></td>
                                <td>
                                <button type="button" name="edit" id="edit" class="btn btn-outline-info btn-warning" data-toggle="modal" data-target="#edituser" data-id="<?= $prd['kode_project'] ?>" data-nama="<?= $prd['nama_project'] ?>" data-mulai="<?= $prd['tgl_mulai'] ?>" data-akhir="<?= $prd['tgl_akhir'] ?>" data-lokasi="<?= $prd['lokasi'] ?>" data-status="<?= $prd['status'] ?>" data-nominal="<?= $prd['nominal'] ?>" onclick="return edited(this)">
                                    <i class="fa fa-edit"> </i>
                                </button>
                                <button type="button" title="Tambah Subkon!" name="subkon" id="subkon" class="btn btn-outline-info btn-success" data-toggle="modal" data-target="#addsubkon" data-id="<?= $prd['kode_project'] ?>" data-nama="<?= $prd['nama_project'] ?>" onclick="return subkon(this)">
                                    <i class="fa fa-plus"> </i> <i class="fa fa-user"> </i>
                                </button>
                                <button type="button" name="rpp" id="rpp" class="btn btn-outline-info btn-primary" data-toggle="modal" data-target="#addrpp" data-id="<?= $prd['kode_project'] ?>" data-nama="<?= $prd['nama_project'] ?>" onclick="return rpp(this)">
                                    <i class="fa fa-plus"> </i> RPP
                                </button>
                                <button type="button" href="#tab2" data-toggle="tab" name="<?= $prd['kode_project'] ?>" id="<?= $prd['kode_project'] ?>" class="btn btn-outline-info btn-default" onclick="return detilsubkon(this, id)">
                                    <i class="fa fa-search"> </i> Subkon
                                </button>
                                <button type="button" href="#tab3" data-toggle="tab" name="<?= $prd['kode_project'] ?>" id="<?= $prd['kode_project'] ?>" class="btn btn-outline-info btn-default" onclick="return detilrpp(this, id)">
                                    <i class="fa fa-search"> </i> RPP
                                </button>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    </div>
                    <div class="tab-pane fade" id="tab2">
                      <div class="col-md-8">
                        <button type="button" href="#tab1" data-toggle="tab" name="back" id="back" class="btn btn-outline-info btn-success">
                            <i class="fa fa-reply"> </i> Kembali
                        </button><br/><br/>
                      </div>
                      <div class="col-md-4">
                        <input type="text" name="psid" id="psid" class="form-control" readonly>
                      </div>
                      <table data-toggle="table">
                          <thead>
                          <tr>
                              <th data-field="dsid">Kode</th>
                              <th data-field="dsnama">Nama</th>
                              <th data-field="dsbidang">Bidang</th>
                              <th data-field="dspj">Penanggung jawab</th>
                              <th data-field="dshapus">Hapus</th>
                          </tr>
                          </thead>
                          <tbody id="datasubkon">
                          </tbody>
                      </table>
                    </div>
                    <div class="tab-pane fade" id="tab3">
                      <div class="col-md-7">
                        <button type="button" href="#tab1" data-toggle="tab" name="back" id="back" class="btn btn-outline-info btn-success">
                            <i class="fa fa-reply"> </i> Kembali
                        </button><br/><br/>
                      </div>
                      <form action="laporan/proyek" method="POST" name="laporanproyek">
                      <div class="col-md-3">
                        <input type="text" name="piid" id="piid" class="form-control" readonly>
                        <input type="hidden" name="proyek" id="proyek">
                      </div>
                      <div class="col-md-2">
                        <button type="submit" class="btn btn-warning"><i class="fa fa-print"></i> Laporan RPP</button>
                      </div>
                      </form>
                      <table data-toggle="table">
                          <thead>
                          <tr>
                              <th data-field="drid">Kode Item</th>
                              <th data-field="drnama">Nama Item</th>
                              <th data-field="drsatuan">Satuan</th>
                              <th data-field="drqty">Qty</th>
                              <th data-field="drharga">Harga</th>
                              <th data-field="drjumlah">Jumlah</th>
                              <th data-field="drrealisasi">Realisasi</th>
                              <th data-field="drhapus">Hapus</th>
                          </tr>
                          </thead>
                          <tbody id="dataitem">
                          </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div><!--/.row-->
</div>	<!--/.main-->

  <!-- Modal Edit -->
  <div class="modal fade" id="edituser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title text-primary" id="exampleModalLabel">Edit Proyek</h4>
        </div>
        <form action="proyek/edit" method="POST" name="edit">
        <div class="modal-body">
          <div class="form-group">
            <label for="editnama">Nama proyek</label>
            <input type="hidden" name="editid" id="editid">
            <textarea class="form-control" name="editnama" id="editnama" required></textarea>
          </div>
          <div class="form-group">
            <label for="editlokasi">Lokasi</label>
            <input type="text" class="form-control" name="editlokasi" id="editlokasi" required>
          </div>
          <div class="form-group">
            <label for="editmulai">Tanggal Mulai</label>
            <input type="date" class="form-control" name="editmulai" id="editmulai" required>
          </div>
          <div class="form-group">
            <label for="editakhir">Tanggal Akhir</label>
            <input type="date" class="form-control" name="editakhir" id="editakhir" required>
          </div>
          <div class="form-group">
            <label for="editnominal">Nominal</label>
            <input type="text" class="form-control" name="editnominal" id="editnominal" required>
          </div>
          <div class="form-group">
            <label for="editStatus">Status</label>
            <div class="form-control">
            <input type="radio" name="editstatus" id="editstatus" value="0" required> Belum dimulai &ensp;
            <input type="radio" name="editstatus" id="editstatus" value="1" required> Dikerjakan &ensp;
            <input type="radio" name="editstatus" id="editstatus" value="2" required> Selesai &ensp;
            <input type="radio" name="editstatus" id="editstatus" value="3" required> Macet/Masalah
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-success" name="edituser" value="Simpan"></input>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal tambah -->
  <div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title text-primary" id="exampleModalLabel">Tambah Proyek</h4>
        </div>
        <form action="proyek/add" method="POST" name="add">
        <div class="modal-body">
          <div class="form-group">
            <label for="addnama">Nama proyek</label>
            <textarea class="form-control" name="addnama" id="addnama" required></textarea>
          </div>
          <div class="form-group">
            <label for="addlokasi">Lokasi</label>
            <input type="text" class="form-control" name="addlokasi" id="addlokasi" required>
          </div>
          <div class="form-group">
            <label for="addmulai">Tanggal Mulai</label>
            <input type="date" class="form-control" name="addmulai" id="addmulai" required>
          </div>
          <div class="form-group">
            <label for="addakhir">Tanggal Akhir</label>
            <input type="date" class="form-control" name="addakhir" id="addakhir" required>
          </div>
          <div class="form-group">
            <label for="addnominal">Nominal</label>
            <input type="text" class="form-control" name="addnominal" id="addnominal" placeholder="Rp." required>
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

  <!-- Modal tambah subkon -->
  <div class="modal fade" id="addsubkon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title text-primary" id="exampleModalLabel">Tambah Penanggung Jawab</h4>
        </div>
        <form action="proyek/subkon" method="POST" name="addsubkon">
        <div class="modal-body">
          <div class="form-group">
            <label for="subkonid">Nama Subkon</label>
            <input type="hidden" name="pidsubkon" id="pidsubkon">
            <select class="selectpicker form-control" name="subkonid" id="subkonid" data-live-search="true" required>
              <?php foreach ($datasubkon as $prd) : ?>
              <option value="<?= $prd['kode_pelaksana'] ?>"><?= $prd['nama_pelaksana'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="form-group">
            <label for="subkonbidang">Bidang</label>
            <input type="text" class="form-control" name="subkonbidang" id="subkonbidang" required>
          </div>
          <div class="form-group">
            <label for="addnominal">Penanggung jawab</label>
            <input type="text" class="form-control" name="subkonpj" id="subkonpj" required>
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
  
  <!-- Modal delete subkon -->
  <div class="modal fade" id="deletesubkon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title text-warning" id="title">Delete Subkon</h4>
        </div>
        <form action="proyek/delsubkon" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label for="role">Apakah anda yakin menghapus subkon ini?</label>
              <input type="hidden" class="form-control" id="delspid" name="delspid">
              <input type="hidden" class="form-control" id="delssid" name="delssid">
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

  <!-- Modal tambah rpp -->
  <div class="modal fade" id="addrpp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title text-primary" id="exampleModalLabel">Tambah RPP</h4>
        </div>
        <form action="proyek/rpp" method="POST" name="addrpp">
        <div class="modal-body">
          <div class="form-group">
            <div class="form-control">
            <input type="radio" name="pilihitem" id="pilihitem" value="0" onclick="selectlama(this)" checked required> Item lama &ensp;
            <input type="radio" name="pilihitem" id="pilihitem" value="1" onclick="selectbaru(this)" required> Item baru
            </div>
            <p class="text-warning">Jika item belum tersedia pilih item baru.</p>
          </div>
          <div class="form-group">
            <label for="itemnama">Nama item</label>
            <input type="hidden" name="pidrpp" id="pidrpp">
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
            <label for="qtyrpp">Qty</label>
            <input type="number" step="0.01" class="form-control" name="qtyrpp" id="qtyrpp" placeholder="0.00" required>
          </div>
          <div class="form-group">
            <label for="hargarpp">Harga satuan</label>
            <input type="text" class="form-control" name="hargarpp" id="hargarpp" placeholder="Rp." required>
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
  
  <!-- Modal delete rpp -->
  <div class="modal fade" id="deleterpp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title text-warning" id="title">Delete RPP</h4>
        </div>
        <form action="proyek/delrpp" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label for="role">Apakah anda yakin menghapus item ini?</label>
              <input type="hidden" class="form-control" id="delrpid" name="delrpid">
              <input type="hidden" class="form-control" id="delriid" name="delriid">
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

  <script>
    function edited(){
    $('#edituser').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var id = button.data('id')
      var nama = button.data('nama')
      var lokasi = button.data('lokasi')
      var mulai = button.data('mulai')
      var akhir = button.data('akhir')
      var nominal = button.data('nominal')
      var status = button.data('status')

      var modal = $(this)
      modal.find('.modal-title').text('Edit ' + nama)
      modal.find('.modal-body #editid').val(id)
      modal.find('.modal-body #editnama').val(nama)
      modal.find('.modal-body #editlokasi').val(lokasi)
      modal.find('.modal-body #editmulai').val(mulai)
      modal.find('.modal-body #editakhir').val(akhir)
      modal.find('.modal-body #editnominal').val(nominal)
      modal.find('.modal-body #editstatus')[status].checked = true
    })
    }
  </script>

  <script>
    function subkon(){
    $('#addsubkon').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var id = button.data('id')
      var nama = button.data('nama')

      var modal = $(this)
      modal.find('.modal-title').text('Subkon ' + nama)
      modal.find('.modal-body #pidsubkon').val(id)
    })
    }
  </script>

  <script>
    function rpp(){
    $('#addrpp').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var id = button.data('id')
      var nama = button.data('nama')

      var modal = $(this)
      modal.find('.modal-title').text('RPP ' + nama)
      modal.find('.modal-body #pidrpp').val(id)
    })
    }
  </script>

  <script>
    function delsubkon(){
    $('#deletesubkon').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var pid = button.data('pid')
      var sid = button.data('sid')
      var nama = button.data('nama')

      var modal = $(this)
      modal.find('.modal-title').text('Delete ' + nama + ' dari Subkon proyek')
      modal.find('.modal-body #delspid').val(pid)
      modal.find('.modal-body #delssid').val(sid)
    })
    }
    function delrpp(){
    $('#deleterpp').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var pid = button.data('pid')
      var iid = button.data('iid')
      var nama = button.data('nama')

      var modal = $(this)
      modal.find('.modal-title').text('Delete ' + nama + ' dari RPP proyek')
      modal.find('.modal-body #delrpid').val(pid)
      modal.find('.modal-body #delriid').val(iid)
    })
    }
  </script>

<script>
	function loadsubkon(query){
		$.ajax({
			url:"proyek/selectSubkon",
			method:"POST",
			data:{query:query},
			success:function(data){
				$('#datasubkon').html(data);
			}
		})
  }
	function loadrpp(query){
		$.ajax({
			url:"proyek/selectItem",
			method:"POST",
			data:{query:query},
			success:function(data){
				$('#dataitem').html(data);
			}
		})
  }
  
  function detilsubkon(event,id){
    document.getElementById("psid").value = "Subkon Proyek "+id;
    loadsubkon(id);
  }
  
  function detilrpp(event,id){
    document.getElementById("piid").value = "RPP Proyek "+id;
    document.getElementById("proyek").value = id;
    loadrpp(id);
  }
</script>

<script>
	function loadjenis(query)
	{
		$.ajax({
			url:"proyek/selectJenis",
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
			url:"proyek/selectSatuan",
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