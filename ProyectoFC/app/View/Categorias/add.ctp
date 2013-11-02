<!-- File: /app/View/Categorias/add.ctp -->

<h1>Add Categoria</h1>

<?php
	echo $this->Form->create('Categoria');
	echo $this->Form->input('nombre');
	echo $this->Form->end('Guardar Categoria');
?>