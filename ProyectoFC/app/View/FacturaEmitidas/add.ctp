<!-- File: /app/View/FacturaEmitidas/add.ctp -->

<h1>Nueva Factura</h1>

<?php
	echo $this->Form->create('FacturaEmitida');
	echo $this->Form->input('nro_factura');
	echo $this->Form->input('nro_sucursal');
	echo $this->Form->input('fecha');
	echo $this->Form->input('comitente_id');
	echo $this->Form->input('tipo_factura_id');
	echo $this->Form->end('Guardar Factura');
?>