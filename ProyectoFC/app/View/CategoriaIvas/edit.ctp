<!-- File: /app/View/CategoriaIvas/edit.ctp -->

<h1>Edit Categoria Iva</h1>
<?php
    echo $this->Form->create('CategoriaIva');
    echo $this->Form->input('descripcion');
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Categoria Iva');
    
?>