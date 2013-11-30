<!-- File: /app/View/PagoMensuals/edit.ctp -->

<h1>Edit Pago Mensual</h1>
<?php
    echo $this->Form->create('PagoMensual');
    echo $this->Form->input('nombre');
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Pago Mensual');
    
?>