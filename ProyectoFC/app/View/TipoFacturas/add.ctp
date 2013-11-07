<!-- File: /app/View/TipoFacturas/add.ctp -->

<h1>Add TipoFacturas</h1>

<?php
	echo $this->Form->create('TipoFactura');
	echo $this->Form->input('nombre');
	echo $this->Form->end('Guardar TipoFacturas');
?> 

