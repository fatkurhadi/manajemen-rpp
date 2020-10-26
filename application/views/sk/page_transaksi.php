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
                                  <button type="button" href="#tab2" data-toggle="tab" name="<?= $prd['no_bukti'] ?>" id="<?= $prd['no_bukti'] ?>" class="btn btn-outline-info btn-default" onclick="return detil(this, id)">
                                      <i class="fa fa-search"> </i> Detil
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
                        <input type="text" class="form-control" name="dtid" id="dtid" readonly>
                      </div>
                      <table data-toggle="table">
                          <thead>
                          <tr>
                              <th data-field="dtid">Nota</th>
                              <th data-field="dtitem">Item</th>
                              <th data-field="dtketerangan">Keterangan</th>
                              <th data-field="dtqty">Qty</th>
                              <th data-field="dtharga">Harga</th>
                              <th data-field="dtjumlah">Jumlah</th>
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
  
  function detil(event,id){
    document.getElementById("dtid").value = "Transaksi "+id;
    load_data(id);
  }
</script>