<?php
class TipoPago extends AppModel {
	var $name = 'TipoPago';
		var $validate = array('descripcion' => array('rule' =>'notEmpty'));
	//---------------------------
	// RELACION TIPOPAGO:INTEGRANTE 1:N
	var $hasMany = array(
			'Integrante' => array(
					'className'     => 'Integrante',
					'foreignKey'    => 'tipo_pago_id',
							)
                    	);
	
}
?>