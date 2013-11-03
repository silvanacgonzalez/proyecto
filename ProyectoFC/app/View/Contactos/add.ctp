<!-- File: /app/View/Contactos/add.ctp -->

<h1>Add Contactos</h1>

<?php
	echo $this->Form->create('Contacto');
	echo $this->Form->input('nombre');
	echo $this->Form->input('apellido');
	echo $this->Form->input('domicilio');
	echo $this->Form->input('telefono');
	echo $this->Form->input('observaciones');
	echo $this->Form->input('comitente_id');
	echo $this->Form->input('ciudad_id');
	echo $this->Form->input('provincia_id');
	echo $this->Form->end('Guardar Contacto');
?>