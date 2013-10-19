<?php
class GruposProyecto extends AppModel {
	var $name = 'GruposProyecto';
	var $validate = array('proyecto_id' => array('rule' =>'notEmpty'),
			'grupo_id' => array('rule' => 'notEmpty'));	
	// RELACION GruposProyecto:PROYECTO 1:N
	var $hasMany = array(
			'Proyecto' => array(
					'className'     => 'Proyecto',
					'foreignKey'    => 'proyecto_id',
							)
                    	);
	// RELACION GruposProyecto:GRUPO 1:N
	var $hasMany = array(
			'Grupo' => array(
					'className'     => 'Grupo',
					'foreignKey'    => 'grupo_id',
			)
	);
	
}
?>



