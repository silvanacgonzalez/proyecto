<!-- File: /app/View/Proyectos/edit.ctp -->

<h1>Edit Proyecto</h1>
<?php
    echo $this->Form->create('Proyecto');
    echo $this->Form->input('nombre');
	echo $this->Form->input('fecha_ini_real');
	echo $this->Form->input('fecha_fin_real');
	echo $this->Form->input('presupuesto_real');
	echo $this->Form->input('fecha_retorno_acta');
	echo $this->Form->input('coordinador');
	echo $this->Form->input('aval_legal');
	echo $this->Form->input('aval_dpto');
	echo $this->Form->input('aval_admin');
	echo $this->Form->input('aval_seu');
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Proyecto');
    
?>
