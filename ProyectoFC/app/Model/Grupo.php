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
			)
	);
// 	//Relacion Grupo:Director 1.1
// 	var $hasOne = array(
// 			'Director' => array(
// 					'className'  	=> 'Director',
// 					'foreignKey'    => 'director_id',
// 					//'conditions'  => array('Comentario.estado' => '1'),
// 			)
// 	);
	var $hasMany = array(
			//Relacion Grupo:ActaAcuerdo 1.n
			'ActaAcuerdo' => array(
					'className'  	=> 'ActaAcuerdo',
					'foreignKey'    => 'grupo_id',
					//'conditions'  => array('Comentario.estado' => '1'),
			),
			//Relacion Grupo:ConvenioEspecifico 1.n
			'ConvenioEspecifico' => array(
					'className'  	=> 'ConvenioEspecifico',
					'foreignKey'    => 'grupo_id',
					//'conditions'  => array('Comentario.estado' => '1'),
			)
	);
	//Relacion Grupo:Proyecto 
	var $hasAndBelongsToMany = array(
			'Proyecto' => array(
					'className'  				=> 'Proyecto',
					'joinTable'    				=> 'grupos_proyectos',
					'foreignKey'    			=> 'grupo_id',
					'associationForeignKey'    	=> 'proyecto_id',
					//'conditions'   	 		=> array('Comentario.estado' => '1'),
			)
	);
}
?>