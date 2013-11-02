<?php
class Provincia extends AppModel {
	var $name = 'Provincia';
	var $validate = array('nombre' => array('rule' =>'notEmpty'));
	//------------------------------------------
	// RELACION PROVINCIA:CIUDAD 1:N
	var $hasMany = 	array(
			// RELACION PROVINCIA:CIUDAD 1:N
			'Ciudad' => array(
					'className'     => 'Ciudad',
					'foreignKey'    => 'provincia_id',
			),
			// RELACION PROVINCIA:COMITENTE 1:N
			'Comitente' => array(
					'className'     => 'Comitente',
					'foreignKey'    => 'provincia_id',
			),
			// RELACION PROVINCIA:CONTACTO 1:N
			'Contacto' => array(
					'className'     => 'Contacto',
					'foreignKey'    => 'provincia_id',
			)
	);
}
?>



