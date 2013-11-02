<!-- File: /app/View/CategoriaPersonas/add.ctp -->

<h1>Add Categoria Personas</h1>

<?php
	echo $this->Form->create('CategoriaPersona');
	echo $this->Form->input('nombre');
	echo $this->Form->end('Guardar Categoria Persona');
?>