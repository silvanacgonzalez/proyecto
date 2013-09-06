<?php
class Equipo extends AppModel {
	var $name = 'Equipo';
	//var $validate = array('descripcion' => array('rule' => 'notEmpty'));
	//Relacion Equipo:Plan 1.1
	var $hasOne = array(
			'Plan' => array(
					'className'  => 'Plan',
					'foreignKey'    => 'plan_id',
					//'conditions'    => array('Comentario.estado' => '1'),
					'order'      => 'Equipo.id DESC'
			)
	);
	//Relacion Equipo:EquipoInteg 1.n
	var $hasMany = array(
			'EquipoInteg' => array(
					'className'  => 'EquipoInteg',
					'foreignKey'    => 'equipo_integ_id',
					//'conditions'    => array('Comentario.estado' => '1'),
					'order'      => 'EquipoInteg.id DESC'
			)
	);
}
?>