<?php 
class Clasificacion extends AppModel { 
    var $name = 'Clasificacion'; 
    var $validate = array (); 
    // RELACION CLASIFICACION:ITEMSUBCLASIFICACION 1:N
    var $hasMany = array(
    		'Item_subclasificacion' => array(
    				'className'     => 'Item_subclasificacion',
    				'foreignKey'    => 'item_subclasificacion_id',
    		),

    // RELACION CLASIFICACION:PROYECTO 1:N

    		'Proyecto' => array(
    				'className'     => 'Proyecto',
    				'foreignKey'    => 'proyecto_id',
    		),

    // RELACION CLASIFICACION:SUBCLASIFICACION 1:N

    		'Subclasificacion' => array(
    				'className'     => 'Subclasificacion',
    				'foreignKey'    => 'subclasificacion_id',
    		)
    );
  } 
?>
