<!-- File: /app/View/Estados/edit.ctp -->

<h1>Modificar Estado</h1>
<?php
    echo $this->Form->create('Estado');
    echo $this->Form->input('nombre');
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Estado');
    
?>