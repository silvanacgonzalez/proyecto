<!-- File: /app/View/FacEmitDetalles/edit.ctp -->

<h1>Modificar Detalle de Factura</h1>
<?php
    echo $this->Form->create('FacEmitDetalle');
    echo $this->Form->input('descripcion');
    echo $this->Form->input('cantidad');
    echo $this->Form->input('monto');
    echo $this->Form->input('rubro_id');
    echo $this->Form->input('factura_emitida_id');
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Detalle de Factura');
    
?>