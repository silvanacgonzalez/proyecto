<?php
class Persona extends AppModel {
	var $name = 'Persona';
	var $validate = array ();
	// RELACION PERSONA:CIUDAD 1:1
	var $hasOne = array(
			'Ciudad' => array(
					'className'     => 'Ciudad',
					'foreignKey'    => 'ciudad_id',
							),

	// RELACION PERSONA:INTEGRANTE 1:1

			'Integrante' => array(
					'className'     => 'Integrante',
					'foreignKey'    => 'integrante_id',
			)
	);
	
	
}
?>