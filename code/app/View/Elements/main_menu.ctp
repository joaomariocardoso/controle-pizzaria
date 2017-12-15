<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Clientes'), array('controller'=>'clients', 'action'=>'index')); ?></li>
		<li><?php echo $this->Html->link(__('Pizzas'), array('controller'=>'products', 'action'=>'index')); ?></li>
		<li><?php echo $this->Html->link(__('Pedidos'), array('controller'=>'requests', 'action'=>'index')); ?></li>
	</ul>
</div>