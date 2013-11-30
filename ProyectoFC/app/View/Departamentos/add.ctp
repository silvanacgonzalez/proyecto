<!-- File: /app/View/Departamentos/add.ctp -->

<h1>Add Departamento</h1>

<?php
	echo $this->Form->create('Departamento');
	echo $this->Form->input('nombre');
	echo $this->Form->end('Guardar Departamento');
?>