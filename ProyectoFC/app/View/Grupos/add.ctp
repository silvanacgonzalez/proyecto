<!-- File: /app/View/Grupos/add.ctp -->

<h1>Nuevo Grupos</h1>

<?php
	echo $this->Form->create('Grupo');
	echo $this->Form->input('nombre');
	echo $this->Form->input('departamento_id');
	echo $this->Form->end('Guardar Frupo');
?>