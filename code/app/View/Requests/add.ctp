<div class="requests form">
<?php echo $this->Form->create('Request'); ?>
	<fieldset>
		<legend><?php echo __('Pedido'); ?></legend>
	<?php
		echo $this->Form->input('client_id', array('label'=>'Selecione o cliente'));
		echo $this->Form->input('total');
		echo $this->Form->input('Product', array('label'=>'Selecione a pizza'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
