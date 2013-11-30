<!-- File: /app/View/Integrantes/add.ctp -->

<h1>Nuevo Integrante</h1>

<?php
	echo $this->Form->create('Integrante');
	echo $this->Form->input('dedicacion');
	echo $this->Form->input('pago_mensual');
	echo $this->Form->input('valor_seguro');
	echo $this->Form->input('fecha_ini');
	echo $this->Form->input('fecha_fin');
	echo $this->Form->input('persona_id');
	echo $this->Form->input('categoria_persona_id');
	echo $this->Form->input('rol_id');
	echo $this->Form->input('tipo_pago_id');
	echo $this->Form->end('Guardar Integrante');
?>