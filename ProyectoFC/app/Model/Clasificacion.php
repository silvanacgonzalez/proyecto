<?php 
class Clasificacion extends AppModel { 
    var $name = 'Clasificacion'; 
      var $validate = array('nombre' => array('rule' => 'notEmpty'));
    // RELACION CLASIFICACION:ITEMSUBCLASIFICACION 1:N
    var $belongsTo = array(
    		'ItemSubclasificacion' => array(
    				'className'     => 'ItemSubclasificacion',
    				'foreignKey'    => 'item_subclasificacion_id',
    		),
         );
    // RELACION CLASIFICACION:PROYECTO 1:N
    	var $belongsTo = array(
    		'Proyecto' => array(
    				'className'     => 'Proyecto',
    				'foreignKey'    => 'proyecto_id',
    		),
);
    // RELACION CLASIFICACION:SUBCLASIFICACION 1:N
  		var $belongsTo = array(
    		'Subclasificacion' => array(
    				'className'     => 'Subclasificacion',
    				'foreignKey'    => 'subclasificacion_id',
    		)
    );
  } 
?>
