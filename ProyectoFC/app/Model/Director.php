<?php
class Director extends AppModel {
	var $name = 'Director';
	var $validate = array('descripcion' => array('rule' => 'notEmpty'));
    // Relacion Director:Integrante 1:1
	var $belongsTo = array(
			'Integrante' => array(
					'className'     => 'Integrante',
					'foreignKey'    => 'integrante_id',
					'order'         => 'Director.id DESC'
			),
			//Relación Director:Grupo 1.n
			'Grupo' => array(
					'className'     => 'Grupo',
					'foreignKey'    => 'grupo_id',
					'order'         => 'Director.id DESC'
			)
	);	

	//Relacion Director:Proyecto 1:n
	var $hasMany = array(
			'Proyecto' => array(
					'className'     => 'Proyecto',
					'foreignKey'    => 'proyecto_id',
					//'conditions'  => array('Proyecto.estado_id' => '1'),
					'order'         => 'Director.id DESC'
			)
	);
}
?>