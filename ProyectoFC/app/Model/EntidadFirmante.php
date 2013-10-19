<?php
class EntidadFirmante extends AppModel {
	var $name = 'EntidadFirmante';
	var $validate = array('nombre' => array('rule' => 'notEmpty'));
	var $hasMany = array(
	//Relacion EntidadFirmante:ActaAcuerdo 1:n
			'ActaAcuerdo' => array(
					'className'     => 'ActaAcuerdo',
					'foreignKey'    => 'entidad_firmante_id',
					//'conditions'  => array('Comentario.estado' => '1'),
			),
	//Relacion EntidadFirmante:ConvenioMarco 1:n
			'ConvenioMarco' => array(
					'className'  	=> 'ConvenioMarco',
					'foreignKey'    => 'entidad_firmante_id',
					//'conditions'  => array('Comentario.estado' => '1'),
			),
	//Relacion EntidadFirmante:ConvenioEspecifico 1:n
			'ConvenioEspecifico' => array(
					'className' 	=> 'ConvenioEspecifico',
					'foreignKey'    => 'entidad_firmante_id',
					//'conditions'  => array('Comentario.estado' => '1'),
			)
	);
}
?>