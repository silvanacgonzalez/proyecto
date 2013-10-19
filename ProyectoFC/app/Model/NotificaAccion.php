<?php
class NotificaAccion extends AppModel {
	var $name = 'NotificaAccion';
	var $validate = array('nombre' => array('rule' => 'notEmpty'));
	
	//Relacion NotificaAccion:Notificacion 1.n
	var $hasMany = array(
			'Notificacion' => array(
					'className'  	=> 'Notificacion',
					'foreignKey'    => 'notifica_accion_id',
					//'conditions'  => array('Comentario.estado' => '1'),
			)
	);
}
?>