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
                <div class="panel-body">
                    <table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="nama" data-sort-order="asc">
                        <thead>
                        <tr>
                            <th data-field="id" data-sortable="true">Kode Pelaksana</th>
                            <th data-field="nama"  data-sortable="true">Nama</th>
                            <th data-field="alamat" data-sortable="false">Alamat</th>
                            <th data-field="telpon" data-sortable="false">Telpon</th>
                            <th data-field="status" data-sortable="false">Status</th>
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
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div>	<!--/.main-->