<div class="clients index">
	<h2><?php echo __('Clientes'); ?></h2>
	
	<div style="display: inline-block; margin-bottom: 20px;">
		<?php echo $this->Html->link(__('Adicionar novo cliente'), array('action' => 'add')); ?>
	</div>

	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name', 'Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('phone', 'Telefone'); ?></th>
			<th><?php echo $this->Paginator->sort('city', 'Cidade'); ?></th>
			<th><?php echo $this->Paginator->sort('created', 'Criado'); ?></th>
			<th><?php echo $this->Paginator->sort('modified', 'Modificado'); ?></th>
			<th style="text-align: center;" class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clients as $client): ?>
	<tr>
		<td><?php echo h($client['Client']['id']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['name']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['phone']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['city']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['created']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $client['Client']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $client['Client']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $client['Client']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $client['Client']['id']))); ?>
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
