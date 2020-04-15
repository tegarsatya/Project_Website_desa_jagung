
	<script src="<?= base_url('assets/admin/js/jquery-1.11.1.min.js') ?>"></script>
	<script src="<?= base_url('assets/admin/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/admin/js/chart.min.js') ?>"></script>
	<script src="<?= base_url('assets/admin/js/chart-data.js') ?>"></script>
	<script src="<?= base_url('assets/admin/js/easypiechart.js') ?>"></script>
	<script src="<?= base_url('assets/admin/js/easypiechart-data.js') ?>"></script>
	<script src="<?= base_url('assets/admin/js/bootstrap-datepicker.js') ?>"></script>
	<script src="<?= base_url('assets/admin/js/custom.js') ?>"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>

	<?php if($this->session->has_userdata('msg')): ?>
			<div class="modal fade" id="msgModal">
				<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h2>Desa Jagung - Admin</h2>
					</div>
					<div class="modal-body">
						<h3><?= $this->session->userdata('msg') ?>!</h3>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
			</div>

			<script type="text/javascript">
				$('#msgModal').modal('show');
			</script>
		<?php endif ?>

</body>
</html>
