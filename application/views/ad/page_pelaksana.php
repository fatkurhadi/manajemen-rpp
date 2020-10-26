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
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <button type="button" name="add" id="add" class="btn btn-outline-info btn-success" data-toggle="modal" data-target="#adduser"><i class="fa fa-plus"> </i> Tambah Subkon</button>
                </div>
                <div class="panel-body">
                    <table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="nama" data-sort-order="asc">
                        <thead>
                        <tr>
                            <th data-field="id" data-sortable="true">Kode Pelaksana</th>
                            <th data-field="nama"  data-sortable="true">Nama</th>
                            <th data-field="alamat" data-sortable="false">Alamat</th>
                            <th data-field="telpon" data-sortable="false">Telpon</th>
                            <th data-field="status" data-sortable="false">Status</th>
                            <th data-field="ubah" data-sortable="false">Ubah</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $prd) : ?>
                            <tr>
                                <td><?= $prd['kode_pelaksana'] ?></td>
                                <td><?= $prd['nama_pelaksana'] ?></td>
                                <td><?= $prd['alamat'] ?></td>
                                <td>0<?= $prd['telpon'] ?></td>
                                <td><?php if ($prd['status'] == 1){echo "Aktif";} else {echo "Non Aktif";} ?></td>
                                <td>
                                <button type="button" name="edit" id="edit" class="btn btn-outline-info btn-warning" data-toggle="modal" data-target="#edituser" data-id="<?= $prd['kode_pelaksana'] ?>" data-nama="<?= $prd['nama_pelaksana'] ?>" data-alamat="<?= $prd['alamat'] ?>" data-telpon="0<?= $prd['telpon'] ?>" data-status="<?= $prd['status'] ?>" onclick="return edited(this)">
                                    <i class="fa fa-edit"> </i>
                                </button>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
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
          <h4 class="modal-title text-primary" id="exampleModalLabel">Edit Subkon</h4>
        </div>
        <form action="pelaksana/edit" method="POST" name="edit">
        <div class="modal-body">
          <div class="form-group">
            <label for="editnama">Nama lengkap</label>
            <input type="hidden" name="editid" id="editid">
            <input type="text" class="form-control" name="editnama" id="editnama" required>
            <p class="text-warning">Contoh penulisan : Dua Jaya Mandiri, PT</p>
          </div>
          <div class="form-group">
            <label for="editalamat">Alamat</label>
            <textarea class="form-control" name="editalamat" id="editalamat" required></textarea>
          </div>
          <div class="form-group">
            <label for="edittelpon">Telpon</label>
            <input type="text" class="form-control" name="edittelpon" id="edittelpon">
          </div>
          <div class="form-group">
            <label for="editStatus">Status</label>
            <div class="form-control">
            <input type="radio" name="editstatus" id="editstatus" value="0" required> Non Aktif &ensp;
            <input type="radio" name="editstatus" id="editstatus" value="1" required> Aktif
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
          <h4 class="modal-title text-primary" id="exampleModalLabel">Tambah Subkon</h4>
        </div>
        <form action="pelaksana/add" method="POST" name="add">
        <div class="modal-body">
          <div class="form-group">
            <label for="addnama">Nama</label>
            <input type="text" class="form-control" name="addnama" id="addnama" required>
            <p class="text-warning">Contoh penulisan : Dua Jaya Mandiri, PT</p>
          </div>
          <div class="form-group">
            <label for="addalamat">Alamat</label>
            <textarea class="form-control" name="addalamat" id="addalamat" required></textarea>
          </div>
          <div class="form-group">
            <label for="addtelpon">Telpon</label>
            <input type="text" class="form-control" name="addtelpon" id="addtelpon" required>
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

  <script>
    function edited(){
    $('#edituser').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var id = button.data('id')
      var nama = button.data('nama')
      var alamat = button.data('alamat')
      var telpon = button.data('telpon')
      var status = button.data('status')

      var modal = $(this)
      modal.find('.modal-title').text('Edit ' + nama)
      modal.find('.modal-body #editid').val(id)
      modal.find('.modal-body #editnama').val(nama)
      modal.find('.modal-body #editalamat').val(alamat)
      modal.find('.modal-body #edittelpon').val(telpon)
      modal.find('.modal-body #editstatus')[status].checked = true
    })
    }
  </script>