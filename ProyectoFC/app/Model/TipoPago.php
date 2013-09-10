<?php
class TipoPago extends AppModel {
	var $name = 'TipoPago';
	var $validate = array ();
	//---------------------------
	// RELACION TIPOPAGO:INTEGRANTE 1:N
	var $belongsTo = array(
			'Integrante' => array(
					'className'     => 'Integrante',
					'foreignKey'    => 'Integrante_id',
							)
                    	);
	
}
?>