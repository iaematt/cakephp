<footer>
	<?php
	echo $this->Html->script('jquery-2.2.4');
	echo $this->Html->script('bootstrap');
	echo $this->Html->script(
		array(
			'dashboard-demo',
			'dataTables.bootstrap',
			'excanvas.min',
			'flot-demo',
			'jquery.dataTables',
			'jquery.flot',
			'jquery.flot.pie',
			'jquery.flot.resize',
			'jquery.flot.tooltip.min',
			'jquery.metisMenu',
			'morris',
			'morris-demo',
			'pace',
			'raphael-2.1.0.min',
			'siminta'
		)
	);
	?>
	<?php echo $this->fetch('script'); ?>
</footer>
