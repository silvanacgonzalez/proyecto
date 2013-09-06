<?php
class Pregunta extends AppModel {
	var $name = 'Pregunta';
	var $validate = array ();
	// RELACION PREGUNTA: PREGS_CIERRE 1:N
	var $hasMany = array(
			'Preg_cierre' => array(
					'className'     => 'Preg_cierre',
					'foreignKey'    => 'preg_cierre_id',
							)
                    	);

}
?>
