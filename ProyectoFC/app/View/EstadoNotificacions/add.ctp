<!-- File: /app/View/EstadoNotificacions/add.ctp -->

<h1>Add Estado Notificacion</h1>

<?php
	echo $this->Form->create('EstadoNotificacion');
	echo $this->Form->input('nombre');
	echo $this->Form->end('Guardar Estado');
?>