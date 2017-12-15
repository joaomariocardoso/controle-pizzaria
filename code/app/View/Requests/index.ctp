<div class="requests index">
	<h2><?php echo __('Pedidos'); ?></h2>

	<div style="display: inline-block; margin-bottom: 20px;">
		<?php echo $this->Html->link(__('Adicionar novo pedido'), array('action' => 'add')); ?>
	</div>

	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Nome do cliente'); ?></th>
			<th><?php echo $this->Paginator->sort('total'); ?></th>
			<th><?php echo $this->Paginator->sort('created', 'Data do pedido'); ?></th>
			<th style="text-align: center;" class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($requests as $request): ?>
	<tr>
		<td><?php echo h($request['Request']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($request['Client']['name'], array('controller' => 'clients', 'action' => 'view', $request['Client']['id'])); ?>
		</td>
		<td><?php echo h($request['Request']['total']); ?>&nbsp;</td>
		<td><?php echo h($request['Request']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $request['Request']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $request['Request']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $request['Request']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $request['Request']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
