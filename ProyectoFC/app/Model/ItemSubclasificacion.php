<?php
class ItemSubclasificacion extends AppModel {
	var $name = 'ItemSubclasificacion';
	var $validate = array('nombre' => array('rule' => 'notEmpty'));
	//Relacion ItemSubclasificacion:Clasificacion 1.1
	var $belongsTo = array(
			'Clasificacion' => array(
					'className'  	=> 'Clasificacion',
					'foreignKey'    => 'clasificacion_id',
					//'conditions'  => array('Comentario.estado' => '1'),
					'order'      	=> 'ItemSubclasificacion.id DESC'
			)
	);
}
?>