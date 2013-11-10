<!-- File: /app/View/ConvenioEspecificos/edit.ctp -->

<h1>Edit Convenio Especifico</h1>
<?php
    echo $this->Form->create('ConvenioEspecifico');
    echo $this->Form->input('fecha_devolucion');
	echo $this->Form->input('responsable_utn');
	echo $this->Form->input('responsable_comit');
	echo $this->Form->input('fecha_ini');
	echo $this->Form->input('fecha_fin');
	echo $this->Form->input('fecha_firma');
	echo $this->Form->input('firm_utn_nombre');
	echo $this->Form->input('firm_utn_cargo');
	echo $this->Form->input('firm_comit_nombre');
	echo $this->Form->input('firm_comit_cargo');
	echo $this->Form->input('objetivo');
	echo $this->Form->input('duracion');
	echo $this->Form->input('observaciones');
	echo $this->Form->input('monto');
	echo $this->Form->input('estado');
	echo $this->Form->input('departamento_id');
	echo $this->Form->input('grupo_id');
	echo $this->Form->input('comitente_id');
	echo $this->Form->input('proyecto_id');
	echo $this->Form->input('entidad_firmante_id');
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Convenio Especifico');
    
?>