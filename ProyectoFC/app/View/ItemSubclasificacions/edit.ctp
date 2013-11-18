<!-- File: /app/View/ItemSubclasificacions/edit.ctp -->

<h1>Modificar Item de Subclasificacion</h1>
<?php
    echo $this->Form->create('ItemSubclasificacion');
    echo $this->Form->input('nombre');
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Item de Subclasificacion');
    
?>