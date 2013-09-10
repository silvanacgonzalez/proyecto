<?php
class Rol extends AppModel {
	var $name = 'Rol';
	var $validate = array ();
	//--------------------------------------
	// RELACION ROL:INTEGRANTE 1:n
	var $belongsTo = array(
			'Rol' => array(
					'className'     => 'Rol',
					'foreignKey'    => 'rol_id',
							)
                    	);
	
}
?>
