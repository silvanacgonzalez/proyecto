<!-- File: /app/View/Equipos/add.ctp -->

<h1>Nuevo Equipo</h1>

<?php
	echo $this->Form->create('Equipo');
	echo $this->Form->input('nombre');
	echo $this->Form->end('Guardar Equipo');
?>