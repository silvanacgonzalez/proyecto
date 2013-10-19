<?php 
class Clasificacion extends AppModel { 
    var $name = 'Clasificacion'; 
      var $validate = array('nombre' => array('rule' => 'notEmpty'));
    // RELACION CLASIFICACION:ITEMSUBCLASIFICACION 1:N
    var $hasMany = array(
    		'ItemSubclasificacion' => array(
    				'className'     => 'ItemSubclasificacion',
    				'foreignKey'    => 'clasificacion_id',
    		),
    // RELACION CLASIFICACION:PROYECTO 1:N
    		'Proyecto' => array(
    				'className'     => 'Proyecto',
    				'foreignKey'    => 'clasificacion_id',
    		),
    // RELACION CLASIFICACION:SUBCLASIFICACION 1:N
  			'Subclasificacion' => array(
    				'className'     => 'Subclasificacion',
    				'foreignKey'    => 'clasificacion_id',
    		)
    );
  } 
?>
