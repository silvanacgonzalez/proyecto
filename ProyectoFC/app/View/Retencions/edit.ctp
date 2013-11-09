<!-- File: /app/View/Retencions/edit.ctp -->

<h1>Edit Retencion</h1>
<?php
echo $this->Form->create('Retencion');
	echo $this->Form->input('canon_inst');
	echo $this->Form->input('canon_inst_monto');
	echo $this->Form->input('fondo_reserva');
	echo $this->Form->input('fondo_reserva_monto');
	echo $this->Form->input('ente_ejecutor');
	echo $this->Form->input('ente_ejecutor_monto');
	echo $this->Form->input('proyecto_id');
	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Retencion');
    
?>
