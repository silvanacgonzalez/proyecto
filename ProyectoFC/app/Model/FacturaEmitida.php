<?php
class FacturaEmitida extends AppModel {
	var $name = 'FacturaEmitida';
	var $validate = array('nro_factura' => array('rule' => 'notEmpty'), 'nro_sucursal' => array('rule' => 'notEmpty'), 'fecha' => array('rule' => 'notEmpty'));
	//Relacion FacturaEmitida:Comitente 1.1
	var $belongsTo = array(
			'Comitente' => array(
					'className'  	=> 'Comitente',
					'foreignKey'    => 'comitente_id',
					//'conditions'  => array('Comentario.estado' => '1'),
					'order'      	=> 'FacturaEmitida.id DESC'
			)
	);
	//Relacion FacturaEmitida:FacEmitDetalle 1.n
	var $hasMany = array(
			'FacEmitDetalle' => array(
					'className'  	=> 'FacEmitDetalle',
					'foreignKey'    => 'factura_emitida_id',
					//'conditions'  => array('Comentario.estado' => '1'),
					'order'     	=> 'FacturaEmitida.id DESC'
			)
	);
	//Relacion FacturaEmitida:TipoFactura 1.1 
	var $belongsTo = array(
			'TipoFactura' => array(
					'className'  	=> 'TipoFactura',
					'foreignKey'    => 'tipo_factura_id',
					//'conditions'  => array('Comentario.estado' => '1'),
					'order'      	=> 'FacturaEmitida.id DESC'
			)
	);
}
?>