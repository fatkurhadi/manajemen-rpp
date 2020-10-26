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
			<div class="col-lg-8">
				<row>
					<div class="panel panel-blue panel-widget ">
						<div class="row no-padding">
							<div class="col-sm-3 col-lg-4 widget-left">
								<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
							</div>
							<div class="col-sm-9 col-lg-8 widget-right">
								<div class="large">120</div>
								<div class="text-muted">Total Proyek</div>
							</div>
						</div>
					</div>
				</row>
				<row>
					<div class="panel panel-orange panel-widget">
						<div class="row no-padding">
							<div class="col-sm-3 col-lg-4 widget-left">
								<svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
							</div>
							<div class="col-sm-9 col-lg-8 widget-right">
								<div class="large">52</div>
								<div class="text-muted">Sub Kontraktor</div>
							</div>
						</div>
					</div>
				</row>
				<row>
					<div class="panel panel-teal panel-widget">
						<div class="row no-padding">
							<div class="col-sm-3 col-lg-4 widget-left">
								<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
							</div>
							<div class="col-sm-9 col-lg-8 widget-right">
								<div class="large">24</div>
								<div class="text-muted">User Online</div>
							</div>
						</div>
					</div>
				</row>
			</div>
			<div class="col-lg-4">
				<div class="panel panel-red">
					<div class="panel-heading dark-overlay"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Calendar</div>
					<div class="panel-body">
						<div id="calendar"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
