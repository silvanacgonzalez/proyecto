<!-- File: /app/View/ArchivoConvenios/add.ctp -->

<h1>Add Archivo Convenio</h1>

<?php
	echo $this->Form->create('ArchivoConvenio');
	echo $this->Form->input('nombre');
echo $this->Form->input('ruta');
echo $this->Form->input('tipo');
	echo $this->Form->end('Guardar Archivo Convenio');
?>
