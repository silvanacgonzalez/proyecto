<!-- File: /app/View/TipoPagos/add.ctp -->

<h1>Add TipoPagos</h1>

<?php
	echo $this->Form->create('TipoPago');
	echo $this->Form->input('descripcion');
	echo $this->Form->end('Guardar TipoPagos');
?> 
