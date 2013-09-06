<?php
class EstadoNotificacion extends AppModel {
	var $name = 'EstadoNotificacion';
	var $validate = array('nombre' => array('rule' => 'notEmpty'));
}
?>