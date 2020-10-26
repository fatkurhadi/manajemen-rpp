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
        <div class="col-lg-4">
            <div class="panel panel-teal">
                <div class="panel-body">
                    <form action="laporan/proyek" method="POST" name="laporanproyek">
                    <div class="form-group">
                        <label for="proyek">Laporan RPP Proyek</label>
                        <select class="selectpicker form-control" name="proyek" id="proyek" data-live-search="true" required>
                        <option value=""></option>
                        <?php foreach ($data1 as $prd) : ?>
                        <option value="<?= $prd['kode_project'] ?>"><?= $prd['kode_project'] ?> | <?= $prd['nama_project'] ?></option>
                        <?php endforeach ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-warning"><i class="fa fa-print"></i> Print</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="panel panel-teal">
                <div class="panel-body">
                    <form action="laporan/subkon" method="POST" name="laporansubkon">
                    <div class="form-group">
                        <label for="subkon">Laporan Transaksi Subkon</label>
                        <select class="selectpicker form-control" name="pelaksanaid" id="pelaksanaid" data-live-search="true" onchange="return changepel(this)" required>
                        <option value=""></option>
                        <?php foreach ($data0 as $prd) : ?>
                        <option value="<?= $prd['kode_pelaksana'] ?>"><?= $prd['kode_pelaksana'] ?> | <?= $prd['nama_pelaksana'] ?></option>
                        <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="proyek">Untuk Proyek</label>
                        <select class="selectpicker form-control" name="proyekid" id="proyekid" data-live-search="true" onchange="return changepro(this)" required>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-warning"><i class="fa fa-print"></i> Print</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="panel panel-teal">
                <div class="panel-body">
                    <form action="laporan/material" method="POST" name="laporanmaterial">
                    <div class="form-group">
                        <label for="material">Laporan Belanja Material</label>
                    </div>
                    <div class="form-group">
                        <p class="text-primary">Awal Periode</p>
                        <input type="date" class="form-control" name="awal" id="awal" required>
                    </div>
                    <div class="form-group">
                        <p class="text-primary">Akhir Periode</p>
                        <input type="date" class="form-control" name="akhir" id="akhir" required>
                    </div>
                    <button type="submit" class="btn btn-warning"><i class="fa fa-print"></i> Print</button>
                    </form>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div>	<!--/.main-->

<script>
	function loadproyek(query)
	{
		$.ajax({
			url:"laporan/selectProyek",
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