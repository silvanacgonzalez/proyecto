<!-- File: /app/View/Comitentes/edit.ctp -->

<h1>Edit Comitente</h1>
<?php
    echo $this->Form->create('Comitente');
	echo $this->Form->input('nombre');
	echo $this->Form->input('responsable');
	echo $this->Form->input('cuit');
	echo $this->Form->input('email');
	echo $this->Form->input('pag_web');
	echo $this->Form->input('telefono');
	echo $this->Form->input('ciudad_id');
	echo $this->Form->input('categoria_iva_id');
	echo $this->Form->input('tipo_comitente_id');
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Comitente');
    
?>