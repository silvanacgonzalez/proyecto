<?php
class EstadoNotificacion extends AppModel {
	var $name = 'EstadoNotificacion';
	var $validate = array('nombre' => array('rule' => 'notEmpty'));
	
	//Relacion EstadoNotificacion:Notificacion 1.n
	var $hasMany = array(
			'Notificacion' => array(
					'className'  	=> 'Notificacion',
					'foreignKey'    => 'estado_notificacion_id',
					//'conditions'  => array('Comentario.estado' => '1'),
			)
	);
}
?>