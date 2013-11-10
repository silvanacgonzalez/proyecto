<!-- File: /app/View/Cierres/add.ctp -->

<h1>Add Cierre</h1>

<?php
	echo $this->Form->create('Cierre');
	echo $this->Form->input('observaciones');
	echo $this->Form->input('fecha_reporte');
	echo $this->Form->input('proyecto_id');
	echo $this->Form->input('motivo_cierre_id');
	echo $this->Form->end('Guardar Cierre');
?>
