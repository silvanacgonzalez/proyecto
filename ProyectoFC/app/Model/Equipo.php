<?php
class Equipo extends AppModel {
	var $name = 'Equipo';
	//var $validate = array('descripcion' => array('rule' => 'notEmpty'));
	//Relacion Equipo:Plan 1.1
	var $hasOne = array(
			'Plan' => array(
					'className'  	=> 'Plan',
					'foreignKey'    => 'plan_id',
					//'conditions'  => array('Comentario.estado' => '1'),
					'order'      	=> 'Equipo.id DESC'
			)
	);
	//Relacion Equipo:Integrante 1.n
	var $hasAndBelongsToMany = array(
			'Equipo' => array(
					'className'  				=> 'Equipo',
					'joinTable'    				=> 'equipos_integrantes',
					'foreignKey'    			=> 'equipo_id',
					'associationForeignKey'    	=> 'integrante_id',
					//'conditions'   	 		=> array('Comentario.estado' => '1'),
					'order'      				=> 'Equipo.id DESC'
			)
	);
	//Relacion Equipo:EquipoIntegrantes 1.n
	var $hasMany = array(
			'EquipoIntegrantes' => array(
					'className'  	=> 'EquipoIntegrantes',
					'foreignKey'    => 'equipos_integrantes_id',
					//'conditions'  => array('Comentario.estado' => '1'),
					'order'      	=> 'Equipo.id DESC'
			)
	);
}
?>