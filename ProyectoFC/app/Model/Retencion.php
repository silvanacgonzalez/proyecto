<?php
class Retencion extends AppModel {
	var $name = 'Retencion';
	var $validate = array ();
	// RELACION RETENCION:PROYECTO 1:1
	var $hasOne = array(
			'Proyecto' => array(
					'className'     => 'Proyecto',
					'foreignKey'    => 'proyecto_id',
							)
                    	);
	
}
?>