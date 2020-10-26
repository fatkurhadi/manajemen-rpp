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
                          </tr>
                          </thead>
                          <tbody id="datasubkon">
                          </tbody>
                      </table>
                    </div>
                    <div class="tab-pane fade" id="tab3">
                      <div class="col-md-8">
                        <button type="button" href="#tab1" data-toggle="tab" name="back" id="back" class="btn btn-outline-info btn-success">
                            <i class="fa fa-reply"> </i> Kembali
                        </button><br/><br/>
                      </div>
                      <div class="col-md-4">
                        <input type="text" name="piid" id="piid" class="form-control" readonly>
                      </div>
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
    loadrpp(id);
  }
</script>