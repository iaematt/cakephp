<div class="content">
	<div class="row">
		<div class="col-md-8">
		<?php echo $this->Form->create('Product'); ?>
			<div class="card">
				<div class="card-header">
					<h5 class="title">
						<?php echo __('Add product'); ?>
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
										'label' => 'Title',
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
									'ref',
									array(
										'label' => 'Ref number',
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
										'label' => 'Description',
										'class' => 'form-control',
										'rows' => 3
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
									'tags',
									array(
										'label' => 'Tags',
										'class' => 'form-control'
									)
								);
							?>
							</div>
						</div>
					</div>

				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-fill btn-primary">Save</button>
				</div>
			</div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>
