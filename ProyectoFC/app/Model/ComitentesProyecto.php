<?php
class ComitenteProyecto extends AppModel {
	var $name = 'ComitenteProyecto';
	var $validate = array('proyecto_id' => array('rule' =>'notEmpty'),
			'comitente_id' => array('rule' => 'notEmpty'));	
	
	// RELACION COMITENTE_PROYECTO:PROYECTO 1:1
	var $belongsTo = array(
			'Proyecto' => array(
					'className'     => 'Proyecto',
					'foreignKey'    => 'proyecto_id',
							),
    // RELACION COMITENTE_PROYECTO:COMITENTE 1:1
			'Comitente' => array(
					'className'     => 'Comitente',
					'foreignKey'    => 'comitente_id',
			)
	);
	
}
?>