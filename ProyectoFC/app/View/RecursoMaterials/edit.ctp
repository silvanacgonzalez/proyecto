<!-- File: /app/View/RecursoMaterials/edit.ctp -->

<h1>Edit RecursoMaterial</h1>
<?php
    echo $this->Form->create('RecursoMaterial');
echo $this->Form->input('nombre');
	echo $this->Form->input('descripcion');
	echo $this->Form->input('frecuencia');

	echo $this->Form->input('costo_total');

	echo $this->Form->input('plan_id');

	echo $this->Form->input('rubro_id');
	echo $this->Form->input('frecuencia_id');

 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar RecursoMaterial');
    
?>
