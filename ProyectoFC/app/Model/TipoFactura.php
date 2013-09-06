<?php
class TipoFactura extends AppModel {
	var $name = 'Tipo_Factura';
	var $validate = array ();
	// RELACION TIPOFACTURA:FACTURA_EMITIDA 1:N
	var $hasMany = array(
			'Factura_Emitida' => array(
					'className'     => 'Factura_Emitida',
					'foreignKey'    => 'Factura_Emitida_id',
							),

	// RELACION TIPOFACTURA:FACTURA_RECIBIDA 1:N

			'Factura_Recibida' => array(
					'className'     => 'Factura_Recibida',
					'foreignKey'    => 'Factura_Recibida_id',
			)
	);	
}

?>