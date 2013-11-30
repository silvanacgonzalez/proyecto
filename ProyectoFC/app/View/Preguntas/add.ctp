<!-- File: /app/View/Preguntas/add.ctp -->

<h1>Add Pregunta</h1>

<?php
	echo $this->Form->create('Pregunta');
	echo $this->Form->input('nombre');
	echo $this->Form->end('Guardar Pregunta');
?>
