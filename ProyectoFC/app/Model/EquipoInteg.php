<?php
class EquipoInteg extends AppModel {
	var $name = 'EquipoInteg';
	//var $validate = array('equipo_id' => array('rule' => 'notEmpty'), 'integrante_id' => array('rule' => 'notEmpty'));
	//Relacion EquipoInteg:Integrante 1.1
	var $belongsTo = array(
			'Integrante' => array(
					'className'  	=> 'Integrante',
					'foreignKey'    => 'integrante_id',
					//'conditions'  => array('Comentario.estado' => '1'),
					'order'      	=> 'EquipoInteg.id DESC'
			)
	);
	//Relacion EquipoInteg:Equipo 1.1
	var $belongsTo = array(
			'Equipo' => array(
					'className'  	=> 'Equipo',
					'foreignKey'    => 'equipo_id',
					//'conditions'  => array('Comentario.estado' => '1'),
					'order'      	=> 'EquipoInteg.id DESC'
			)
	);
}
?>