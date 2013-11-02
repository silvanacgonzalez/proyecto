<!-- File: /app/View/Categorias/edit.ctp -->

<h1>Edit Categoria</h1>
<?php
    echo $this->Form->create('Categoria');
    echo $this->Form->input('nombre');
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Categoria');
    
?>