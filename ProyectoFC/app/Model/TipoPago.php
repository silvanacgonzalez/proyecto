<?php
class TipoPago extends AppModel {
	var $name = 'Tipo_Pago';
	var $validate = array ();
	// RELACION TIPOPAGO:INTEGRANTE 1:N
	var $hasMany = array(
			'Integrante' => array(
					'className'     => 'Integrante',
					'foreignKey'    => 'Integrante_id',
							)
                    	);
	
}
?>