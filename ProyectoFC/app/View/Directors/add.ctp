<!-- File: /app/View/Directors/add.ctp -->

<h1>Add Director</h1>

<?php
	echo $this->Form->create('Director');
	echo $this->Form->input('descripcion');
	echo $this->Form->end('Guardar Director');
?>