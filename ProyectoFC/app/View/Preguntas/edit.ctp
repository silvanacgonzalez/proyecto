<!-- File: /app/View/Preguntas/edit.ctp -->

<h1>Edit Pregunta</h1>
<?php
    echo $this->Form->create('Pregunta');
    echo $this->Form->input('nombre');
	
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Pregunta');
    
?>
