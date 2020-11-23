<div class="login-page">
  <div class="form">

    <form class="register-form">

      <input type="text" placeholder="<?php echo __('Name'); ?>"/>
      <input type="email" placeholder="<?php echo __('Email'); ?>"/>
      <input type="password" placeholder="<?php echo __('Password'); ?>"/>
      <button><?php echo __('Create'); ?></button>

      <p class="message"><?php echo __('Already registered?'); ?> <a href="#"><?php echo __('Sign In'); ?></a></p>
    </form>

	<?php echo $this->Form->create('User'); ?>

		<?php echo $this->Flash->render(); ?>
		<?php echo $this->Flash->render('auth'); ?>

		<?php
			echo $this->Form->input('email', array(
				'label' => false,
				'type' => 'email',
				'placeholder' => __('Email'),
				'autofocus'
			));
		?>

		<?php
			echo $this->Form->input('password', array(
				'label' => false,
				'type' => 'password',
				'placeholder' => __('Password')
			));
		?>

    	<button type="submit"><?php echo __('Login'); ?></button>

    	<p class="message"><?php echo __('Not registered?'); ?> <a href="#"><?php echo __('Create an account'); ?></a></p>

	<?php echo $this->Form->end(); ?>
  </div>
</div>
