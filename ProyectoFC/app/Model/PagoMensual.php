<?php
class PagoMensual extends AppModel {
	var $name = 'PagoMensual';
	var $validate = array ();
//-----------------------------------------------------------
	// RELACION PAGOMENSUAL:INTEGRANTE 1:N
	
	var $belongsTo = array(
			'Integrante' => array(
					'className'     => 'Integrante',
					'foreignKey'    => 'integrante_id',
			)
	);
}
?>