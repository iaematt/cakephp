<div class="sidebar" data="blue">

	<div class="sidebar-wrapper">
		<div class="logo">
			<a href="<?php echo $this->Html->url('/'); ?>" class="simple-text logo-mini">
				MB
			</a>
			<a href="<?php echo $this->Html->url('/'); ?>" class="simple-text logo-normal">
				DevBSB
			</a>
		</div>

		<ul class="nav">

			<li>
				<a href="<?php echo $this->Html->url('/'); ?>">
					<i class="tim-icons icon-chart-pie-36"></i>
					<p><?php echo __('Dashboard'); ?></p>
				</a>
			</li>

			<li>
				<a href="<?php echo $this->Html->url('/categories'); ?>">
					<i class="tim-icons icon-tag"></i>
					<p><?php echo __('Categories'); ?></p>
				</a>
			</li>

			<li>
				<a href="<?php echo $this->Html->url('/news'); ?>">
					<i class="tim-icons icon-paper"></i>
					<p><?php echo __('News'); ?></p>
				</a>
			</li>

			<li>
				<a href="<?php echo $this->Html->url('/products'); ?>">
					<i class="tim-icons icon-bag-16"></i>
					<p><?php echo __('Products'); ?></p>
				</a>
			</li>

			<li>
				<a href="<?php echo $this->Html->url('/users'); ?>">
					<i class="tim-icons icon-single-02"></i>
					<p><?php echo __('Users'); ?></p>
				</a>
			</li>

		</ul>
	</div>

</div>
