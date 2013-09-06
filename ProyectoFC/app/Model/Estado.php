<?php
class Estado extends AppModel {
	var $name = 'Estado';
	var $validate = array('nombre' => array('rule' => 'notEmpty'));
	//Relacion Equipo:Proyecto 1.n
	var $hasMany = array(
			'Proyecto' => array(
					'className'  => 'Proyecto',
					'foreignKey'    => 'estado_id',
					//'conditions'    => array('Comentario.estado' => '1'),
                    'order'      => 'Estado.id DESC'
			)
	);
}
?>