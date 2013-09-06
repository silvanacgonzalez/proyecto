<?php
class Grupo extends AppModel {
	var $name = 'Grupo';
	var $validate = array('nombre' => array('rule' => 'notEmpty'));
	//Relacion Grupo:Departamento 1.1
	var $hasOne = array(
			'Departamento' => array(
					'className'  => 'Departamento',
					'foreignKey'    => 'departamento_id',
					//'conditions'    => array('Comentario.estado' => '1'),
					'order'      => 'Grupo.id DESC'
			),

	//Relacion Grupo:Director 1.1

			'Director' => array(
					'className'  => 'Director',
					'foreignKey'    => 'director_id',
					//'conditions'    => array('Comentario.estado' => '1'),
					'order'      => 'Grupo.id DESC'
			)
	);
	//Relacion Grupo:Proyecto 1.n
	var $hasMany = array(
			'Proyecto' => array(
					'className'  => 'Proyecto',
					'foreignKey'    => 'proyecto_id',
					//'conditions'    => array('Comentario.estado' => '1'),
					'order'      => 'Grupo.id DESC'
			)
	);
}
?>