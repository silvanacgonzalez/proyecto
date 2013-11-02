<!-- File: /app/View/CategoriaPersonas/edit.ctp -->

<h1>Edit Categoria Persona</h1>
<?php
    echo $this->Form->create('CategoriaPersona');
    echo $this->Form->input('nombre');
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Categoria Persona');
    
?>