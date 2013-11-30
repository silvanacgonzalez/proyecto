<!-- File: /app/View/Frecuencias/add.ctp -->

<h1>Nueva Frecuencia</h1>

<?php
	echo $this->Form->create('Frecuencia');
	echo $this->Form->input('nombre');
	echo $this->Form->end('Guardar Frecuencia');
?>