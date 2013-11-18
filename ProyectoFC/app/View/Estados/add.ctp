<!-- File: /app/View/Estados/add.ctp -->

<h1>Nuevo Estado</h1>

<?php
	echo $this->Form->create('Estado');
	echo $this->Form->input('nombre');
	echo $this->Form->end('Guardar Estado');
?>