<!-- File: /app/View/Historias/add.ctp -->

<h1>Nueva Historia</h1>

<?php
	echo $this->Form->create('Historia');
	echo $this->Form->input('nombre');
	echo $this->Form->input('descripcion');
	echo $this->Form->input('proyecto_id');
	echo $this->Form->end('Guardar Historia');
?>