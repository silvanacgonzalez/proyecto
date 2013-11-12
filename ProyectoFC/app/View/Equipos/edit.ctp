<!-- File: /app/View/Equipos/edit.ctp -->

<h1>Modificar Equipo</h1>
<?php
    echo $this->Form->create('Equipo');
    echo $this->Form->input('nombre');
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Equipo');
    
?>