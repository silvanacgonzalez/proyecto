<?php
class Referente extends AppModel {
	var $name = 'Referente';
	var $validate = array('nombre' => array('rule' =>'notEmpty'),
			'email' => array('rule' => 'notEmpty'),
			'comitente_id' => array('rule' => 'notEmpty'));
							
	// RELACION REFERENTE:COMITENTE 1:1
	var $belongsTo = array(
			'Comitente' => array(
					'className'     => 'Comitente',
					'foreignKey'    => 'comitente_id',
							),);
//--------------------------------------------------
	// RELACION REFERENTE:PROYECTO
	var $hasOne = array(
			'Proyecto' => array(
					'className'     => 'Proyecto',
					'foreignKey'    => 'referente_id',
			)
	);
	
	
}
?>