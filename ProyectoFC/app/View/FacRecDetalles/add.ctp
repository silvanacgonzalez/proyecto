<!-- File: /app/View/FacRecDetalles/add.ctp -->

<h1>Nuevo Detalle de Factura</h1>

<?php
	echo $this->Form->create('FacRecDetalle');
	echo $this->Form->input('descripcion');
	echo $this->Form->input('cantidad');
	echo $this->Form->input('monto');
	echo $this->Form->input('rubro_id');
	echo $this->Form->input('factura_recibida_id');
	echo $this->Form->end('Guardar Detalle de Factura');
?>