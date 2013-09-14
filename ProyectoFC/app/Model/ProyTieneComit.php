<?php
class ProyTieneComit extends AppModel {
	var $name = 'ProTieneComit';
	var $validate = array('proyecto_id' => array('rule' =>'notEmpty'),
			'comitente_id' => array('rule' => 'notEmpty'));	
	
	// RELACION PROY_TIENE_COMIT:PROYECTO 1:1
	var $hasOne = array(
			'Proyecto' => array(
					'className'     => 'Proyecto',
					'foreignKey'    => 'proyecto_id',
							)
                    	);
	// RELACION PROY_TIENE_COMIT:COMITENTE 1:1
	var $hasOne = array(
			'Comitente' => array(
					'className'     => 'Comitente',
					'foreignKey'    => 'comitente_id',
			)
	);
	
}
?>