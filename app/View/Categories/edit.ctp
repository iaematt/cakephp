<div class="content">
	<div class="row">
		<div class="col-md-8">
		<?php echo $this->Form->create('Category'); ?>
			<div class="card">
				<div class="card-header">
					<h5 class="title">
						<?php echo __('Edit category'); ?>
					</h5>
					<?php echo $this->Form->input('id'); ?>
				</div>
				<div class="card-body">

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							<?php
								echo $this->Form->input(
									'name',
									array(
										'label' => __('Title'),
										'class' => 'form-control'
									)
								);
							?>
							</div>
						</div>
					</div>

				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-fill btn-primary"><?php echo __('Save'); ?></button>
				</div>
			</div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>
