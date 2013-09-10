<?php
class Pregunta extends AppModel {
	var $name = 'Pregunta';
	var $validate = array ();
	// RELACION PREGUNTA: PREGS_CIERRE 1:N
	var $belongsTo = array(
			'PregCierre' => array(
					'className'     => 'PregCierre',
					'foreignKey'    => 'preg_cierre_id',
							)
                    	);

}
?>
