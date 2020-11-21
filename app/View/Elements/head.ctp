<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php //echo $cakeDescription ?>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		// echo $this->Html->css('cake.generic'); // default
		echo $this->Html->css('bootstrap');
		echo $this->Html->css(
			array(
				'dataTables.bootstrap',
				'main-style',
				'morris-0.4.3.min',
				'pace-theme-big-counter',
				'social-buttons',
				'style',
				'timeline'
			)
		);

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');



	?>
</head>
