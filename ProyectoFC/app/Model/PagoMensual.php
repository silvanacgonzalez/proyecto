<?php
class PagoMensual extends AppModel {
	var $name = 'Pago_mensual';
	var $validate = array ();

	// RELACION PAGOMENSUAL:INTEGRANTE 1:N
	
	var $hasMany = array(
			'Integrante' => array(
					'className'     => 'Integrante',
					'foreignKey'    => 'integrante_id',
			)
	);
}
?>