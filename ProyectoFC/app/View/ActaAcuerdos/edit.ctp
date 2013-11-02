<!-- File: /app/View/ActaAcuerdos/edit.ctp -->

<h1>Editar Acta Acuerdo</h1>
<?php
    echo $this->Form->create('ActaAcuerdo');
    echo $this->Form->input('id');
    echo $this->Form->input('id');
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Acta Acuerdo');
    
?>