<!-- File: /app/View/Etapas/add.ctp -->

<h1>Nueva Etapa</h1>

<?php
	echo $this->Form->create('Etapa');
	echo $this->Form->input('codigo');
	echo $this->Form->input('nombre');
	echo $this->Form->input('plan_id');
	echo $this->Form->end('Guardar Etapa');
?>