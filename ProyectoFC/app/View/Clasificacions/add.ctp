<!-- File: /app/View/Clasificacions/add.ctp -->

<h1>Agregar una Clasificacion</h1>

<?php
	echo $this->Form->create('Clasificacion');
	echo $this->Form->input('nombre');
	echo $this->Form->end('Guardar Clasificacion');
?>