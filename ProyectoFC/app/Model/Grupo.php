<?php
class Grupo extends AppModel {
	var $name = 'Grupo';
	var $validate = array('nombre' => array('rule' => 'notEmpty'));
	//Relacion Grupo:Departamento 1.1
	var $belongsTo = array(
			'Departamento' => array(
					'className'  	=> 'Departamento',
					'foreignKey'    => 'departamento_id',
					//'conditions'  => array('Comentario.estado' => '1'),
					'order'      	=> 'Grupo.id DESC'
			)
	);
	//Relacion Grupo:Director 1.1
	var $hasOne = array(
			'Director' => array(
					'className'  	=> 'Director',
					'foreignKey'    => 'director_id',
					//'conditions'  => array('Comentario.estado' => '1'),
					'order'      	=> 'Grupo.id DESC'
			)
	);
	//Relacion Grupo:Proyecto 1.n
	var $hasMany = array(
			'Proyecto' => array(
					'className'  	=> 'Proyecto',
					'foreignKey'    => 'proyecto_id',
					//'conditions'  => array('Comentario.estado' => '1'),
					'order'      	=> 'Grupo.id DESC'
			),
			//Relacion Grupo:ActaAcuerdo 1.n
			'ActaAcuerdo' => array(
					'className'  	=> 'ActaAcuerdo',
					'foreignKey'    => 'acta_acuerdo_id',
					//'conditions'  => array('Comentario.estado' => '1'),
					'order'      	=> 'Grupo.id DESC'
			),
			//Relacion Grupo:ConvenioEspecifico 1.n
			'ConvenioEspecifico' => array(
					'className'  	=> 'ConvenioEspecifico',
					'foreignKey'    => 'convenio_especifico_id',
					//'conditions'  => array('Comentario.estado' => '1'),
					'order'      	=> 'Grupo.id DESC'
			)
	);
}
?>