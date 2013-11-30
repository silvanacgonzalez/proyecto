<!-- File: /app/View/Rubros/add.ctp -->

<h1>Add Rubro</h1>

<?php
	echo $this->Form->create('Rubro');
	echo $this->Form->input('nombre');
	echo $this->Form->end('Guardar Rubro');
?> 
