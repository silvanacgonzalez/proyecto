<!-- File: /app/View/Clasificacions/edit.ctp -->

<h1>Edit Clasificacion</h1>
<?php
   echo $this->Form->create('Clasificacion');
	echo $this->Form->input('nombre');
	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Clasificacion');
    
?>