<!-- File: /app/View/CategoriaIvas/add.ctp -->

<h1>Add Categoria Iva</h1>

<?php
	echo $this->Form->create('CategoriaIva');
	echo $this->Form->input('descripcion');
	echo $this->Form->end('Guardar Categoria Iva');
?>