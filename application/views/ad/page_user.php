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
                    <button type="button" name="add" id="add" class="btn btn-outline-info btn-success" data-toggle="modal" data-target="#adduser"><i class="fa fa-plus"> </i> Tambah User</button>
                </div>
                <div class="panel-body">
                    <table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="nama" data-sort-order="asc">
                        <thead>
                        <tr>
                            <th data-field="id" data-sortable="true">Kode User</th>
                            <th data-field="nama"  data-sortable="true">Nama</th>
                            <th data-field="level" data-sortable="true">Level</th>
                            <th data-field="kodepel" data-sortable="false">Kode Pelaksana</th>
                            <th data-field="aksi" data-sortable="false">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($userdata as $prd) : ?>
                            <tr>
                                <td><?= $prd['kode_user'] ?></td>
                                <td><?= $prd['nama'] ?></td>
                                <td><?= $prd['level'] ?></td>
                                <td><?= $prd['kode_pelaksana'] ?></td>
                                <td>
                                <button type="button" name="edit" id="edit" class="btn btn-outline-info btn-warning" data-toggle="modal" data-target="#edituser" data-id="<?= $prd['kode_user'] ?>" data-level="<?= $prd['level'] ?>" data-nama="<?= $prd['nama'] ?>" data-kodepel="<?= $prd['kode_pelaksana'] ?>" onclick="return edited(this)">
                                    <i class="fa fa-edit"> </i>
                                </button>
                                <button type="button" name="delete" id="delete" class="btn btn-outline-info btn-danger" data-toggle="modal" data-target="#deleteuser" data-id="<?= $prd['kode_user'] ?>" data-nama="<?= $prd['nama'] ?>" onclick="return deleted(this)">
                                    <i class="fa fa-trash"> </i>
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
          <h4 class="modal-title text-primary" id="exampleModalLabel">Edit User</h4>
        </div>
        <form action="user/edit" method="POST" name="edit">
        <div class="modal-body">
          <div class="form-group">
            <label for="editlevel">Level</label>
            <input type="hidden" name="editid" id="editid">
            <input type="text" class="form-control" name="editlevel" id="editlevel" readonly>
          </div>
          <div class="form-group">
            <label for="editnama">Nama lengkap</label>
            <input type="text" class="form-control" name="editnama" id="editnama" readonly>
          </div>
          <div class="form-group">
            <label for="editpass">Password</label>
            <input type="password" class="form-control" name="editpass" id="editpass" required>
          </div>
          <div class="form-group">
            <label for="editcpass">Konfirmasi Password</label>
            <input type="password" class="form-control" name="editcpass" id="editcpass" oninput="return valeditpass(this)" required>
            <p class="text-danger" id="aepass" hidden>Password tidak sama!</p>
          </div>
          <div class="form-group">
            <label for="editkodepel">Kode Pelaksana</label>
            <input type="text" class="form-control" name="editkodepel" id="editkodepel" readonly>
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
          <h4 class="modal-title text-primary" id="exampleModalLabel">Tambah User</h4>
        </div>
        <form action="user/add" method="POST" name="add">
        <div class="modal-body">
          <div class="form-group">
            <label for="addlevel">Akses</label>
            <select class="form-control" name="addlevel" id="addlevel" onchange="return selectlevel(this)" required>
              <option value="Subkon">Subkon</option>
              <option value="Operator">Operator</option>
              <option value="Administrator">Administrator</option>
            </select>
          </div>
          <div class="form-group">
            <label for="addnama">Nama lengkap</label>
            <input type="text" class="form-control" name="addnama" id="addnama" required>
          </div>
          <div class="form-group">
            <label for="addpass">Password</label>
            <input type="password" class="form-control" name="addpass" id="addpass" required>
          </div>
          <div class="form-group">
            <label for="addcpass">Konfirmasi Password</label>
            <input type="password" class="form-control" name="addcpass" id="addcpass" oninput="return valaddpass(this)" required>
            <p class="text-danger" id="aapass" hidden>Password tidak sama!</p>
          </div>
          <div class="form-group">
            <label for="addkodepel">Kode Pelaksana</label>
            <select class="selectpicker form-control" name="addkodepel" id="addkodepel" data-live-search="true" required>
              <option value="-">-</option>
              <?php foreach ($datasubkon as $prd) : ?>
              <option value="<?= $prd['kode_pelaksana'] ?>"><?= $prd['kode_pelaksana'] ?> | <?= $prd['nama_pelaksana'] ?></option>
              <?php endforeach ?>
            </select>
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
  </div>
  </div>

  <!-- Modal delete -->
  <div class="modal fade" id="deleteuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title text-warning" id="title">Delete User</h4>
        </div>
        <form action="user/delete" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label for="role">Apakah anda yakin menghapus user ini?</label>
              <input type="hidden" class="form-control" id="deleteid" name="deleteid">
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
  </div>
  </div>

  <script>
    function selectlevel(){
    if (document.getElementById("addlevel").value == "Administrator" || document.getElementById("addlevel").value == "Operator"){
      document.getElementById("addkodepel").disabled = true;
    return (false);
    } else {
      document.getElementById("addkodepel").disabled = false;
    return (false);
    }
    return (true);
    }
    function valaddpass(){
    if (document.getElementById("addcpass").value == document.getElementById("addpass").value){
      document.getElementById("aapass").hidden = true;
    return (false);
    } else {
      document.getElementById("aapass").hidden = false;
    return (false);
    }
    return (true);
    }
    function valeditpass(){
    if (document.getElementById("editcpass").value == document.getElementById("editpass").value){
      document.getElementById("aepass").hidden = true;
    return (false);
    } else {
      document.getElementById("aepass").hidden = false;
    return (false);
    }
    return (true);
    }
    </script>

  <script>
    function edited(){
    $('#edituser').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var id = button.data('id')
      var level = button.data('level')
      var nama = button.data('nama')
      var kodepel = button.data('kodepel')

      if (level == "Administrator" || level == "Operator"){
        document.getElementById("editkodepel").disabled = true;
      } else {
        document.getElementById("editkodepel").disabled = false;
      }

      var modal = $(this)
      modal.find('.modal-title').text('Edit ' + nama)
      modal.find('.modal-body #editid').val(id)
      modal.find('.modal-body #editlevel').val(level)
      modal.find('.modal-body #editnama').val(nama)
      modal.find('.modal-body #editkodepel').val(kodepel)
    })
    }
  </script>

  <script>
    function deleted(){
    $('#deleteuser').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var nama = button.data('nama')
      var id = button.data('id')
      var modal = $(this)
      modal.find('.modal-title').text('Delete ' + nama)
      modal.find('.modal-body #deleteid').val(id)
    })
    }
  </script>