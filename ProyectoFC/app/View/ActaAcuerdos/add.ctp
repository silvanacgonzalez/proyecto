<!-- File: /app/View/ActaAcuerdos/add.ctp -->

<h1>Agregar Acta Acuerdo</h1>

<?php
	echo $this->Form->create('ActaAcuerdo');
	echo $this->Form->input('VER1');
	echo $this->Form->input('VER2');
	echo $this->Form->end('Guardar Acta Acuerdo');
?>