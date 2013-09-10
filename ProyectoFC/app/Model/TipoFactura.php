<?php
class TipoFactura extends AppModel {
	var $name = 'TipoFactura';
	var $validate = array ();
	//------------------------------------------------
	// RELACION TIPOFACTURA:FACTURA_EMITIDA 1:N
	var $belongsTo = array(
			'FacturaEmitida' => array(
					'className'     => 'FacturaEmitida',
					'foreignKey'    => 'Factura_Emitida_id',
							)
                    	);
	// RELACION TIPOFACTURA:FACTURA_RECIBIDA 1:N
	var $belongsTo = array(
			'FacturaRecibida' => array(
					'className'     => 'FacturaRecibida',
					'foreignKey'    => 'factura_recibida_id',
			)
	);	
}

?>