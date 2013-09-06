<?php
class NotificaAccion extends AppModel {
	var $name = 'NotificaAccion';
	var $validate = array('nombre' => array('rule' => 'notEmpty'));
}
?>