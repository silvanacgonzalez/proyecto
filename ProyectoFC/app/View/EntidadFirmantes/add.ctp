<!-- File: /app/View/EntidadFirmantes/add.ctp -->

<h1>Nueva Entidad Firmante</h1>

<?php
	echo $this->Form->create('EntidadFirmante');
	echo $this->Form->input('nombre');
	echo $this->Form->end('Guardar Entidad Firmante');
?>