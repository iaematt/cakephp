<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		DevBSB |
		<?php echo $this->fetch('title'); ?>
	</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<?php
		echo $this->Html->meta('icon');

		/**
		 * IMPORT CSS TEMPLATE
		 */
		echo $this->Html->css(
			array(
				'demo',
				'black-dashboard',
				'nucleo-icons'
			)
		);

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
