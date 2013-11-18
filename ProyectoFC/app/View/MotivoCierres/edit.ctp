<!-- File: /app/View/MotivoCierres/edit.ctp -->

<h1>Modificar Motivo de Cierre</h1>
<?php
    echo $this->Form->create('MotivoCierre');
    echo $this->Form->input('nombre');
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Motivo de Cierre');
    
?>