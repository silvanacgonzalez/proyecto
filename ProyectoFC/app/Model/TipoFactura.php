<?php
class TipoFactura extends AppModel {
	var $name = 'TipoFactura';
	var $validate = array('nombre' => array('rule' =>'notEmpty'));
	//------------------------------------------------
	// RELACION TIPOFACTURA:FACTURA_EMITIDA 1:N
	var $hasMany = array(
			'FacturaEmitida' => array(
					'className'     => 'FacturaEmitida',
					'foreignKey'    => 'tipo_factura_id',
							),
  	// RELACION TIPOFACTURA:FACTURA_RECIBIDA 1:N
			'FacturaRecibida' => array(
					'className'     => 'FacturaRecibida',
					'foreignKey'    => 'tipo_factura_id',
			)
	);	
}

?>