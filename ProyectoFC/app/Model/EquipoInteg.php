<?php
class EquipoInteg extends AppModel {
	var $name = 'EquipoInteg';
	var $validate = array('equipo_id' => array('rule' => 'notEmpty'), 'integrante_id' => array('rule' => 'notEmpty'));
	//Relacion EquipoInteg:Integrante
	//Relacion EquipoInteg:Equipo
}
?>