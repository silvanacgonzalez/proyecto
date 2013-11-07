<?php
class Rol extends AppModel {
	var $name = 'Rol';
	var $validate = array('descripcion' => array('rule' =>'notEmpty'));
	//--------------------------------------
	// RELACION ROL:INTEGRANTE 1:n
	var $hasMany = array(
			'Rol' => array(
					'className'     => 'Rol',
					'foreignKey'    => 'integrante_id',
							)
                    	);
	
}
?>
