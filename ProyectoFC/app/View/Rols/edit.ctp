<!-- File: /app/View/Rols/edit.ctp -->

<h1>Edit Rol</h1>
<?php
echo $this->Form->create('Rol');
	echo $this->Form->input('descripcion');
	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Rol');
    
?>
