<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card ">
				<div class="card-header">
					<h4 class="card-title"><?php echo __('Products'); ?></h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table tablesorter">
							<thead class=" text-primary">
								<tr>
									<th><?php echo $this->Paginator->sort('id'); ?></th>
									<th><?php echo $this->Paginator->sort('title'); ?></th>
									<th><?php echo $this->Paginator->sort('ref'); ?></th>
									<th><?php echo $this->Paginator->sort('description'); ?></th>
									<th><?php echo $this->Paginator->sort('created'); ?></th>
									<th><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($products as $product): ?>
								<tr>
									<td><?php echo h($product['Product']['id']); ?>&nbsp;</td>
									<td><?php echo h($product['Product']['title']); ?>&nbsp;</td>
									<td><?php echo h($product['Product']['ref']); ?>&nbsp;</td>
									<td><?php echo h($product['Product']['description']); ?>&nbsp;</td>
									<td><?php echo h($product['Product']['created']); ?>&nbsp;</td>
									<td class="actions">
										<!-- <?php echo $this->Html->link(__('View'), array('action' => 'view', $product['Product']['id'])); ?> -->
										<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $product['Product']['id'])); ?>
										<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $product['Product']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $product['Product']['id']))); ?>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<p>
				<?php
				echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
				?>
			</p>

			<p>
				<?php
					echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
					echo $this->Paginator->numbers(array('separator' => ''));
					echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
				?>
			</p>

			<h3><?php echo __('Actions'); ?></h3>

				<?php echo $this->Html->link(__('New product'), array('action' => 'add'), array('class' => 'btn btn-fill btn-primary')); ?>

		</div>
	</div>
</div>

