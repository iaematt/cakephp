<div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="email" placeholder="email"/>
      <input type="password" placeholder="password"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>

		<?php echo $this->Form->create('User'); ?>

			<?php echo $this->Flash->render(); ?>
			<?php echo $this->Flash->render('auth'); ?>

			<?php
				echo $this->Form->input('email', array(
					'label' => false,
					'type' => 'email',
					'placeholder' => 'email',
					'autofocus'
				));
			?>

			<?php
				echo $this->Form->input('password', array(
					'label' => false,
					'type' => 'password',
					'placeholder' => 'password'
				));
			?>

      <button type="submit">login</button>

      <p class="message">Not registered? <a href="#">Create an account</a></p>

		<?php echo $this->Form->end(); ?>
  </div>
</div>
