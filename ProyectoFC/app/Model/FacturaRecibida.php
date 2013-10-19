<?php
class FacturaRecibida extends AppModel {
	var $name = 'FacturaRecibida';
	var $validate = array('nro_factura' => array('rule' => 'notEmpty'), 'nro_sucursal' => array('rule' => 'notEmpty'), 'fecha' => array('rule' => 'notEmpty'));
	//Relacion FacturaRecibida:Comitente 1.1
	var $belongsTo = array(
			'Comitente' => array(
					'className'  	=> 'Comitente',
					'foreignKey'    => 'comitente_id',
					//'conditions'  => array('Comentario.estado' => '1'),
			),
	//Relacion FacturaRecibida:TipoFactura 1.1
			'TipoFactura' => array(
					'className'  	=> 'TipoFactura',
					'foreignKey'    => 'tipo_factura_id',
					//'conditions'  => array('Comentario.estado' => '1'),
			)
	);
	//Relacion FacturaRecibida:FacRecDetalle 1.n
	var $hasMany = array(
			'FacRecDetalle' => array(
					'className'  	=> 'FacRecDetalle',
					'foreignKey'    => 'factura_recibida_id',
					//'conditions'  => array('Comentario.estado' => '1'),
			)
	);
}
?>