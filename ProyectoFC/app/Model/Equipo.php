<?php
class Equipo extends AppModel {
	var $name = 'Equipo';
	//var $validate = array('descripcion' => array('rule' => 'notEmpty'));
	//Relacion Equipo:Plan 1.1
	var $belongsTo = array(
			'Plan' => array(
					'className'  	=> 'Plan',
					'foreignKey'    => 'plan_id',
					//'conditions'  => array('Comentario.estado' => '1'),
			)
	);
	//Relacion Equipo:Integrante 1.n
	var $hasAndBelongsToMany = array(
			'Integrante' => array(
					'className'  				=> 'Integrante',
					'joinTable'    				=> 'equipos_integrantes',
					'foreignKey'    			=> 'equipo_id',
					'associationForeignKey'    	=> 'integrante_id',
					//'conditions'   	 		=> array('Comentario.estado' => '1'),
			)
	);
}
?>