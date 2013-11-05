<!-- File: /app/View/Departamentos/edit.ctp -->

<h1>Edit Departamentos</h1>
<?php
    echo $this->Form->create('Departamento');
    echo $this->Form->input('nombre');
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Departamento');
    
?>