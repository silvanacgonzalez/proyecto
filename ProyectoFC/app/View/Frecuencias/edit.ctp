<!-- File: /app/View/Frecuencias/edit.ctp -->

<h1>Modificar Frecuencia</h1>
<?php
    echo $this->Form->create('Frecuencia');
    echo $this->Form->input('nombre');
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Frecuencia');
    
?>