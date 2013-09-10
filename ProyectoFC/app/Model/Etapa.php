<?php
class Etapa extends AppModel {
	var $name = 'Etapa';
	var $validate = array('codigo' => array('rule' => 'notEmpty'), 'nombre' => array('rule' => 'notEmpty'));
	//Relacion Etapa:Plan 1.1
	var $belongsTo = array(
			'Plan' => array(
					'className'  	=> 'Plan',
					'foreignKey'    => 'plan_id',
					//'conditions'  => array('Comentario.estado' => '1'),
                    'order'      	=> 'Etapa.id DESC'
			)
	);
	//Relacion Etapa:Actividad 1.n
	var $hasMany = array(
			'Actividad' => array(
					'className' 	=> 'Actividad',
					'foreignKey'    => 'actividad_id',
					//'conditions'  => array('Comentario.estado' => '1'),
					'order'      	=> 'Etapa.id DESC'
			)
	);
}
?>