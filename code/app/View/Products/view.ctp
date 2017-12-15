<div class="products view">
<h2><?php echo __('Pizza'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($product['Product']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ingredients'); ?></dt>
		<dd>
			<?php echo h($product['Product']['ingredients']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($product['Product']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($product['Product']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($product['Product']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
	<br><br>
	<div class="related">
		<h3><?php echo __('Related Requests'); ?></h3>
		<?php if (!empty($product['Request'])): ?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Client Id'); ?></th>
			<th><?php echo __('Total'); ?></th>
			<th><?php echo __('Created'); ?></th>
			<th><?php echo __('Modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($product['Request'] as $request): ?>
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

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('New Request'), array('controller' => 'requests', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>
