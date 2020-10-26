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
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">Data Sandi Transaksi</div>
                <div class="panel-body">
                    <table data-toggle="table">
                        <thead>
                        <tr>
                            <th data-field="id" data-sortable="true">Kode Sandi</th>
                            <th data-field="nama"  data-sortable="true">Nama Sandi</th>
                            <th data-field="mutasi" data-sortable="true">Mutasi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data1 as $prd) : ?>
                            <tr>
                                <td><?= $prd['kode_sandi'] ?></td>
                                <td><?= $prd['nama_sandi'] ?></td>
                                <td><?= $prd['mutasi'] ?></td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">Data Item</div>
                <div class="panel-body">
                    <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="nama" data-sort-order="asc">
                        <thead>
                        <tr>
                            <th data-field="id" data-sortable="true">Kode Item</th>
                            <th data-field="nama"  data-sortable="true">Nama Item</th>
                            <th data-field="jenis" data-sortable="true">Jenis</th>
                            <th data-field="satuan" data-sortable="false">Satuan</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data2 as $prd) : ?>
                            <tr>
                                <td><?= $prd['kode_item'] ?></td>
                                <td><?= $prd['nama_item'] ?></td>
                                <td><?= $prd['jenis'] ?></td>
                                <td><?= $prd['satuan'] ?></td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div>	<!--/.main-->