<?php
class PregsCierre extends AppModel {
	var $name = 'PregsCierre';
	var $validate = array ();
	// RELACION PREGS_CIERRE:CIERRE 1:1
	var $hasOne = array(
			'Cierre' => array(
					'className'     => 'Cierre',
					'foreignKey'    => 'cierre_id',
							)
                    	);
	// RELACION PREGS_CIERRE:PREGUNTA 1:1
	var $hasOne = array(
			'Pregunta' => array(
					'className'     => 'Pregunta',
					'foreignKey'    => 'pregunta_id',
			)
	);
}
?>
