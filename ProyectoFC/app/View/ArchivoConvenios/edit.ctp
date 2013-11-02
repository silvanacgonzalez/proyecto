<!-- File: /app/View/ArchivoConvenios/edit.ctp -->

<h1>Edit Archivo Convenios</h1>
<?php
    echo $this->Form->create('ArchivoConvenio');
    echo $this->Form->input('nombre');
echo $this->Form->input('ruta');
echo $this->Form->input('tipo');

 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Archivo Convenios');
    
?>
