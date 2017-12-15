<div class="products form">
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('Pizza'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', array('label'=>'Nome'));
		echo $this->Form->input('description', array('label'=>'Descrição'));
		echo $this->Form->input('ingredients', array('label'=>'Ingredientes'));
		echo $this->Form->input('price', array('label'=>'Preço'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
