<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<?php echo $this->element('head'); ?>
<body>

	<!--  wrapper -->
	<div id="wrapper">

		<?php echo $this->element('navbar-top'); ?>
		<?php echo $this->element('navbar-side'); ?>

		<!--  page-wrapper -->
		<div id="page-wrapper">

			<?php echo $this->Flash->render(); ?>
			<?php echo $this->fetch('content'); ?>

		</div>
		<!-- end page-wrapper -->
	<?php echo $this->element('sql_dump'); ?>
	<?php echo $this->element('footer'); ?>

</body>
</html>
