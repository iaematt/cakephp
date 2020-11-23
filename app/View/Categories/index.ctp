<div class="content">
	<div class="row">
		<div class="col-md-12">

			<?php echo $this->Flash->render(); ?>

			<div class="card ">
				<div class="card-header">
					<h4 class="card-title"><?php echo __('Categories'); ?></h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table tablesorter">
							<thead class=" text-primary">
								<tr>
									<th><?php echo $this->Paginator->sort('id'); ?></th>
									<th><?php echo $this->Paginator->sort('name'); ?></th>
									<th><?php echo $this->Paginator->sort('created'); ?></th>
									<th><?php echo $this->Paginator->sort('modified'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($categories as $category): ?>
								<tr>
									<td><?php echo h($category['Category']['id']); ?>&nbsp;</td>
									<td><?php echo h($category['Category']['name']); ?>&nbsp;</td>
									<td><?php echo h($category['Category']['created']); ?>&nbsp;</td>
									<td><?php echo h($category['Category']['modified']); ?>&nbsp;</td>
									<td class="actions">
										<!-- <?php echo $this->Html->link(__('View'), array('action' => 'view', $category['Category']['id'])); ?> -->
										<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $category['Category']['id'])); ?>
										<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $category['Category']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $category['Category']['id']))); ?>
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

			<?php echo $this->Html->link(__('New Category'), array('action' => 'add'), array('class' => 'btn btn-fill btn-primary')); ?>
			<?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index'), array('class' => 'btn btn-fill btn-primary')); ?>
			<?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add'), array('class' => 'btn btn-fill btn-primary')); ?>

		</div>
	</div>
</div>

