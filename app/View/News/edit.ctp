<div class="content">
	<div class="row">
		<div class="col-md-8">
		<?php echo $this->Form->create('News'); ?>
			<div class="card">
				<div class="card-header">
					<h5 class="title">
						<?php echo __('Edit News'); ?>
					</h5>
					<?php echo $this->Form->input('id'); ?>
				</div>
				<div class="card-body">

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							<?php
								echo $this->Form->input(
									'title',
									array(
										'label' => _('Title'),
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
					<button type="submit" class="btn btn-fill btn-primary"><?php echo __('Save'); ?></button>
				</div>
			</div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>
