<!-- File: /app/View/ItemSubclasificacions/add.ctp -->

<h1>Nuevo Item de Subclasificacion</h1>

<?php
	echo $this->Form->create('ItemSubclasificacion');
	echo $this->Form->input('nombre');
	echo $this->Form->end('Guardar Item de Subclasificacion');
?>