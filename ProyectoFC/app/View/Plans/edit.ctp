<!-- File: /app/View/Plans/edit.ctp -->

<h1>Edit Plan</h1>
<?php
    echo $this->Form->create('Plan');
    echo $this->Form->input('fecha_ini_prob');
	echo $this->Form->input('fecha_fin_prob');
	echo $this->Form->input('presupuesto_planif');
	echo $this->Form->input('proyecto_id');
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Plan');
    
?>
