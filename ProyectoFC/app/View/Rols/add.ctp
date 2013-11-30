<!-- File: /app/View/Rols/add.ctp -->

<h1>Add Rol</h1>

<?php
	echo $this->Form->create('Rol');
	echo $this->Form->input('descripcion');
	echo $this->Form->end('Guardar Rol');
?> 
