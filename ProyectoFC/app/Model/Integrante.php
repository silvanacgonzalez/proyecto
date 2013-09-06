<?php
class Integrante extends AppModel {
	var $name = 'Integrante';
	var $validate = array('dedicacion' => array('rule' => 'notEmpty'), 'pago_mensual' => array('rule' => 'notEmpty'), 'valor_seguro' => array('rule' => 'notEmpty'), 'fecha_ini' => array('rule' => 'notEmpty'), 'fecha_fin' => array('rule' => 'notEmpty'));
	//Relacion Integrante:Director
	//Relacion Integrante:EquipoInteg
}
?>
