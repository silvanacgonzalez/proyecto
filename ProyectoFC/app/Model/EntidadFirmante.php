<?php
class EntidadFirmante extends AppModel {
	var $name = 'EntidadFirmante';
	var $validate = array('nombre' => array('rule' => 'notEmpty'));
	var $hasMany = array(
	//Relacion EntidadFirmante:ActaAcuerdo 1:n
			'ActaAcuerdo' => array(
					'className'     => 'ActaAcuerdo',
					'foreignKey'    => 'acta_acuerdo_id',
					//'conditions'  => array('Comentario.estado' => '1'),
					'order'    		=> 'EntidadFirmante.id DESC'
			),
	//Relacion EntidadFirmante:ConvenioMarco 1:n
			'ConvenioMarco' => array(
					'className'  	=> 'ConvenioMarco',
					'foreignKey'    => 'convenio_marco_id',
					//'conditions'  => array('Comentario.estado' => '1'),
					'order'      	=> 'EntidadFirmante.id DESC'
			),
	//Relacion EntidadFirmante:ConvenioEspecifico 1:n
			'ConvenioEspecifico' => array(
					'className' 	=> 'ConvenioEspecifico',
					'foreignKey'    => 'convenio_especifico_id',
					//'conditions'  => array('Comentario.estado' => '1'),
					'order'      	=> 'EntidadFirmante.id DESC'
			)
	);
}
?>