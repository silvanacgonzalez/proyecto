<?php
class Historia extends AppModel {
	var $name = 'Historia';
	var $validate = array('nombre' => array('rule' => 'notEmpty'), 'descripcion' => array('rule' => 'notEmpty'));
	//Relacion Historia:Proyecto 1.1
	var $belongsTo = array(
			'Proyecto' => array(
					'className'  	=> 'Proyecto',
					'foreignKey'    => 'proyecto_id',
					//'conditions   => array('Comentario.estado' => '1'),
					'order'     	=> 'Historia.id DESC'
			)
	);
}
?>