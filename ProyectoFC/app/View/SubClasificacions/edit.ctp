<!-- File: /app/View/SubClasificacions/edit.ctp -->

<h1>Edit SubClasificacion</h1>
<?php
echo $this->Form->create('SubClasificacion');
	echo $this->Form->input('nombre');
	echo $this->Form->input('clasificacion_id');
	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar SubClasificacion');
    
?>
