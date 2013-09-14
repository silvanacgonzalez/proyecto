<?php
class SubClasificacion extends AppModel {
	var $name = 'SubClasificacion';
	var $validate = array('nombre' => array('rule' =>'notEmpty'),
			'clasificacion_id' => array('rule' =>'notEmpty'));
	// RELACION SUB_CLASIFICACION:CLASIFICACION 1:1
	var $hasOne = array(
			'Clasificacion' => array(
					'className'     => 'Clasificacion',
					'foreignKey'    => 'clasificacion_id',
			)
	);
	//---------------------------------------------------------
	// RELACION SUB_CLASIFICACION:ITEMS_CLASIFICACION 1:N
	var $belongsTo = array(
			'ItemClasificacion' => array(
					'className'     => 'ItemClasificacion',
					'foreignKey'    => 'item_clasificacion_id',
							)
                    	);
}
?>