<?php
class Rol extends AppModel {
	var $name = 'Rol';
	var $validate = array('descripcion' => array('rule' =>'notEmpty'));
	//--------------------------------------
	// RELACION ROL:INTEGRANTE 1:n
	var $hasMany = array(
			'Integrante' => array(
					'className'     => 'Integrante',
					'foreignKey'    => 'rol_id',
							)
                    	);
	
}
?>
