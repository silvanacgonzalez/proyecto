<!-- File: /app/View/TipoComitentes/edit.ctp -->

<h1>Edit TipoComitentes</h1>
<?php
echo $this->Form->create('TipoComitente');
	echo $this->Form->input('nombre');
	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar TipoComitente');
    
?>
