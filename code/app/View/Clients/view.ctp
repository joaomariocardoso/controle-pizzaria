<div class="clients view">
<h2><?php echo __('Clientes'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($client['Client']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($client['Client']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($client['Client']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Neighborhood'); ?></dt>
		<dd>
			<?php echo h($client['Client']['neighborhood']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cep'); ?></dt>
		<dd>
			<?php echo h($client['Client']['cep']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($client['Client']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($client['Client']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($client['Client']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observations'); ?></dt>
		<dd>
			<?php echo h($client['Client']['observations']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($client['Client']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($client['Client']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
	<br><br>
	<div class="related">
		<h3><?php echo __('Related Requests'); ?></h3>
		<?php if (!empty($client['Request'])): ?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Client Id'); ?></th>
			<th><?php echo __('Total'); ?></th>
			<th><?php echo __('Created'); ?></th>
			<th><?php echo __('Modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($client['Request'] as $request): ?>
			<tr>
				<td><?php echo $request['id']; ?></td>
				<td><?php echo $request['client_id']; ?></td>
				<td><?php echo $request['total']; ?></td>
				<td><?php echo $request['created']; ?></td>
				<td><?php echo $request['modified']; ?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'requests', 'action' => 'view', $request['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'requests', 'action' => 'edit', $request['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'requests', 'action' => 'delete', $request['id']), array('confirm' => __('Are you sure you want to delete # %s?', $request['id']))); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>
	</div>
</div>
