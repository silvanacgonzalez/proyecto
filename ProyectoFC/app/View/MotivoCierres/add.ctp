<!-- File: /app/View/MotivoCierres/add.ctp -->

<h1>Nuevo Motivo de cierre</h1>

<?php
	echo $this->Form->create('MotivoCierre');
	echo $this->Form->input('nombre');
	echo $this->Form->end('Guardar Motivo de Cierre');
?>