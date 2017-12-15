<div class="requests view">
<h2><?php echo __('Pedido'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($request['Request']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($request['Client']['name'], array('controller' => 'clients', 'action' => 'view', $request['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total'); ?></dt>
		<dd>
			<?php echo h($request['Request']['total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($request['Request']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($request['Request']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
	<br><br>
	<div class="related">
		<h3><?php echo __('Related Products'); ?></h3>
		<?php if (!empty($request['Product'])): ?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Description'); ?></th>
			<th><?php echo __('Ingredients'); ?></th>
			<th><?php echo __('Price'); ?></th>
			<th><?php echo __('Created'); ?></th>
			<th><?php echo __('Modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($request['Product'] as $product): ?>
			<tr>
				<td><?php echo $product['id']; ?></td>
				<td><?php echo $product['description']; ?></td>
				<td><?php echo $product['ingredients']; ?></td>
				<td><?php echo $product['price']; ?></td>
				<td><?php echo $product['created']; ?></td>
				<td><?php echo $product['modified']; ?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products', 'action' => 'delete', $product['id']), array('confirm' => __('Are you sure you want to delete # %s?', $product['id']))); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>
