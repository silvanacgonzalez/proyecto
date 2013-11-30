<!-- File: /app/View/Plans/add.ctp -->

<h1>Add Plan</h1>

<?php
	echo $this->Form->create('Plan');
	echo $this->Form->input('fecha_ini_prob');
	echo $this->Form->input('fecha_fin_prob');
	echo $this->Form->input('presupuesto_planif');
	echo $this->Form->input('proyecto_id');
	echo $this->Form->end('Guardar Plan');
?>
