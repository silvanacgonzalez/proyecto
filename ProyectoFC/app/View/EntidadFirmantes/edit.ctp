<!-- File: /app/View/EntidadFirmantes/edit.ctp -->

<h1>Modificar Entidad Firmante</h1>
<?php
    echo $this->Form->create('EntidadFirmante');
    echo $this->Form->input('nombre');
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Entidad Firmante');
    
?>