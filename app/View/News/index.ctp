<div class="content">
	<div class="row">
		<div class="col-md-12">

			<?php echo $this->Flash->render(); ?>

			<div class="card ">
				<div class="card-header">
					<h4 class="card-title"><?php echo __('News'); ?></h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table tablesorter">
							<thead class=" text-primary">
								<tr>
									<th><?php echo $this->Paginator->sort('id'); ?></th>
									<th><?php echo $this->Paginator->sort('title'); ?></th>
									<th><?php echo $this->Paginator->sort('description'); ?></th>
									<th><?php echo $this->Paginator->sort('category_id'); ?></th>
									<th><?php echo $this->Paginator->sort('created'); ?></th>
									<th><?php echo $this->Paginator->sort('modified'); ?></th>
									<th><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($news as $news): ?>
								<tr>
									<td><?php echo h($news['News']['id']); ?>&nbsp;</td>
									<td><?php echo h($news['News']['title']); ?>&nbsp;</td>
									<td><?php echo h($news['News']['description']); ?>&nbsp;</td>
									<td class="center"><?php echo $this->Html->link($news['Category']['name'], array('controller' => 'categories', 'action' => 'view', $news['Category']['id'])); ?></td>
									<td><?php echo h($news['News']['created']); ?>&nbsp;</td>
									<td><?php echo h($news['News']['modified']); ?>&nbsp;</td>
									<td class="actions">
										<!-- <?php echo $this->Html->link(__('View'), array('action' => 'view', $news['News']['id'])); ?> -->
										<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $news['News']['id'])); ?>
										<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $news['News']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $news['News']['id']))); ?>
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

				<?php echo $this->Html->link(__('New News'), array('action' => 'add'), array('class' => 'btn btn-fill btn-primary')); ?>
				<?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index'), array('class' => 'btn btn-fill btn-primary')); ?>
				<?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add'), array('class' => 'btn btn-fill btn-primary')); ?>

		</div>
	</div>
</div>

