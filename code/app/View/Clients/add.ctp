<div class="clients form">
<?php echo $this->Form->create('Client'); ?>
	<fieldset>
		<legend><?php echo __('Clientes'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label'=>'Nome'));
		echo $this->Form->input('address', array('label'=>'Endereço'));
		echo $this->Form->input('neighborhood', array('label'=>'Bairro'));
		echo $this->Form->input('cep');
		echo $this->Form->input('phone', array('label'=>'Telefone'));
		echo $this->Form->input('city', array('label'=>'Cidade'));
		echo $this->Form->input('state', array('label'=>'Estado'));
		echo $this->Form->input('observations', array('label'=>'Observações'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
