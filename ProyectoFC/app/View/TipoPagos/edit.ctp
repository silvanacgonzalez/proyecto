<!-- File: /app/View/TipoPagos/edit.ctp -->

<h1>Edit TipoPagos</h1>
<?php
echo $this->Form->create('TipoPago');
	echo $this->Form->input('descripcion');
	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar TipoPago');
    
?>
