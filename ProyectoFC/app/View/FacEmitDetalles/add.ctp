<!-- File: /app/View/FacEmitDetalles/add.ctp -->

<h1>Nuevo Detalle de Factura</h1>

<?php
	echo $this->Form->create('FacEmitDetalle');
	echo $this->Form->input('descripcion');
	echo $this->Form->input('cantidad');
	echo $this->Form->input('monto');
	echo $this->Form->input('rubro_id');
	echo $this->Form->input('factura_emitida_id');
	echo $this->Form->end('Guardar Detalle de Factura');
?>