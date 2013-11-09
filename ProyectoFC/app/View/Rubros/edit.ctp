<!-- File: /app/View/Rubros/edit.ctp -->

<h1>Edit Rubro</h1>
<?php
echo $this->Form->create('Rubro');
	echo $this->Form->input('nombre');
	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Rubro');
    
?>
