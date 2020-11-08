<div class="page-header">
	<h3>Dashboard</h3>
</div>
<div class="row">
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="glyphicon glyphiconfolder-open"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">
							<font size="18"><b><?php echo $this->m_hotel->get_data('kamar')->num_rows(); ?></b></font>
						</div>
						<div><b>Jumlah Kamar Hotel</b></div>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url() . 'admin/kamar' ?>">
				<div class="panel-footer">
					<span class="pull-left">Klik Lebih Rinci</span>
					<span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>

	<div class="col-lg-3 col-md-6">
		<div class="panel panel-success">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="glyphicon glyphiconuser"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">
							<font size="18"><b><?php echo $this->m_hotel->get_data('pelanggan')->num_rows(); ?></b></font>
						</div>
						<div><b>Jumlah Pelanggan yang Terdaftar</b></div>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url() . 'admin/pelanggan' ?>">
				<div class="panel-footer">
					<span class="pull-left">Klik Lebih Rinci</span>
					<span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>


</div>
<!-- /.row -->