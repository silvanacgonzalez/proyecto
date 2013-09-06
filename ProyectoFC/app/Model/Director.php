<?php
class Director extends AppModel {
	var $name = 'Director';
	var $validate = array('descripcion' => array('rule' => 'notEmpty'));
    // Relacion Director:Integrante 1:1
	var $hasOne = array(
			'Integrante' => array(
					'className'     => 'Integrante',
					'foreignKey'    => 'integrante_id',
			)
	);	

	//Relacion Director:Proyecto 1:n
	var $hasMany = array(
			'Proyecto' => array(
					'className'  => 'Proyecto',
					'foreignKey'    => 'director_id',
					//'conditions'    => array('Comentario.estado' => '1'),
					'order'      => 'Director.id DESC'
			)
	);
}
?>