<!-- File: /app/View/RecursoMaterials/add.ctp -->

<h1>Add Recurso material</h1>

<?php
	echo $this->Form->create('RecursoMaterial');
	echo $this->Form->input('descripcion');
	echo $this->Form->input('frecuencia');

	echo $this->Form->input('costo_total');

	echo $this->Form->input('plan_id');

	echo $this->Form->input('rubro_id');
	echo $this->Form->input('frecuencia_id');

	echo $this->Form->end('Guardar RecursoMaterial');
?>

