<div class="content">
	<div class="row">
		<div class="col-md-8">
		<?php echo $this->Form->create('News'); ?>
			<div class="card">
				<div class="card-header">
					<h5 class="title">
						<?php echo __('Add News'); ?>
					</h5>
				</div>
				<div class="card-body">

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							<?php
								echo $this->Form->input(
									'title',
									array(
										'label' => __('Title'),
										'class' => 'form-control'
									)
								);
							?>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							<?php
								echo $this->Form->input(
									'description',
									array(
										'type' => 'textarea',
										'label' => __('Description'),
										'class' => 'form-control',
										'rows' => 3
									)
								);
							?>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 pr-md-1">
							<div class="form-group">
							<?php
								echo $this->Form->input(
									'category_id',
									array(
										'label' => __('Category'),
										'class' => 'form-control'
									)
								);
							?>
							</div>
						</div>
					</div>

				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-fill btn-primary"><?php echo __('Add'); ?></button>
				</div>
			</div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>
