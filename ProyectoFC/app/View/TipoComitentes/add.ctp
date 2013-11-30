<!-- File: /app/View/TipoComitentes/add.ctp -->

<h1>Add TipoComitente</h1>

<?php
	echo $this->Form->create('TipoComitente');
	echo $this->Form->input('nombre');
	echo $this->Form->end('Guardar TipoComitente');
?> 
