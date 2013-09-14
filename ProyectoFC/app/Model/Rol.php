<?php
class Rol extends AppModel {
	var $name = 'Rol';
	var $validate = array('descripcion' => array('rule' =>'notEmpty'));
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
