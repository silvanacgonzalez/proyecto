<?php
class Encuesta extends AppModel {
	var $name = 'Encuesta';
	//var $validate = array('descripcion' => array('rule' => 'notEmpty'));
    // Relacion Encuesta:Proyecto 1:1
	var $hasOne = array(
			'Proyecto' => array(
					'className'     => 'Proyecto',
					'foreignKey'    => 'proyecto_id',
					'order'         => 'Encuesta.id DESC'
			)
	);	
}
?>