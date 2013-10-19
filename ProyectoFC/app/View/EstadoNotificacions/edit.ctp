<!-- File: /app/View/EstadoNotificacions/edit.ctp -->

<h1>Edit Estado Notificacion</h1>
<?php
    echo $this->Form->create('EstadoNotificacion');
    echo $this->Form->input('nombre');
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Estado Notificacion');
    
?>