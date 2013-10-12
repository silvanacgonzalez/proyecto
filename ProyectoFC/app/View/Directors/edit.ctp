<!-- File: /app/View/Directors/edit.ctp -->

<h1>Edit Director</h1>
<?php
    echo $this->Form->create('Director');
    echo $this->Form->input('descripcion');
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Director');
    
?>
