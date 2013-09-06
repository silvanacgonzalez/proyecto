<?php
class SubClasificacion extends AppModel {
	var $name = 'Sub_clasificacion';
	var $validate = array ();
	// RELACION SUB_CLASIFICACION:ITEMS_CLASIFICACION 1:N
	var $hasMany = array(
			'Item_clasificacion' => array(
					'className'     => 'Item_clasificacion',
					'foreignKey'    => 'item_clasificacion_id',
							)
                    	);
	// RELACION SUB_CLASIFICACION:CLASIFICACION 1:1
	var $hasOne = array(
			'Clasificacion' => array(
					'className'     => 'Clasificacion',
					'foreignKey'    => 'clasificacion_id',
			)
	);
}
?>