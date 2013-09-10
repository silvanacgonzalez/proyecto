<?php
class MotivoCierre extends AppModel {
	var $name = 'MotivoCierre';
	var $validate = array('nombre' => array('rule' => 'notEmpty'));
	//Relacion MotivoCierre:Cierre 1.n
	var $hasMany = array(
			'Cierre' => array(
					'className'  	=> 'Cierre',
					'foreignKey'    => 'cierre_id',
					//'conditions'  => array('Comentario.estado' => '1'),
					'order'      	=> 'MotivoCierre.id DESC'
			)
	);
}
?>