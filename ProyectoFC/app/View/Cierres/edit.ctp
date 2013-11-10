<!-- File: /app/View/Cierres/edit.ctp -->

<h1>Edit Cierre</h1>
<?php
    echo $this->Form->create('Cierre');
    echo $this->Form->input('observaciones');
    echo $this->Form->input('fecha_reporte');
    echo $this->Form->input('proyecto_id');
	echo $this->Form->input('motivo_cierre_id');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Cierre');
    
?>
