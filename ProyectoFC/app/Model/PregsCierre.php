<?php
class PregsCierre extends AppModel {
	var $name = 'Pregs_cierre';
	var $validate = array ();
	// RELACION PREGS_CIERRE:CIERRE 1:1
	var $hasOne = array(
			'Cierre' => array(
					'className'     => 'Cierre',
					'foreignKey'    => 'cierre_id',
							),

	// RELACION PREGS_CIERRE:PREGUNTA 1:1

			'Pregunta' => array(
					'className'     => 'Pregunta',
					'foreignKey'    => 'pregunta_id',
			)
	);
}
?>
