<!-- File: /app/View/TipoFacturas/edit.ctp -->

<h1>Edit TipoFacturas</h1>
<?php
echo $this->Form->create('TipoFactura');
	echo $this->Form->input('nombre');
	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar TipoFactura');
    
?>

