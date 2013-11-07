<!-- File: /app/View/SubClasificacions/add.ctp -->

<h1>Add SubClasificacion</h1>

<?php
	echo $this->Form->create('SubClasificacion');
	echo $this->Form->input('nombre');
	echo $this->Form->input('clasificacion_id');
	echo $this->Form->end('Guardar SubClasificacion');
?> 
