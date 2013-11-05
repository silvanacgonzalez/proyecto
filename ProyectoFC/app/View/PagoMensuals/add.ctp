<!-- File: /app/View/PagoMensuals/add.ctp -->

<h1>Add Pago Mensual</h1>

<?php
	echo $this->Form->create('PagoMensual');
	echo $this->Form->input('nombre');
	echo $this->Form->end('Guardar Pago Mensual');
?>