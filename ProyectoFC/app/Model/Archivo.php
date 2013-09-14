<?php 
class Archivo extends AppModel { 
    var $name = 'Archivo'; 
    var $validate = array('nombre' => array('rule' => 'notEmpty'), 
    	'ruta' => array('rule' => 'notEmpty'), 'tipo' => array('rule' => 'notEmpty'),
    	'proyecto_id' => array('rule' => 'notEmpty'));
    
    // RELACION ARCHIVO:PROYECTO 1:1 
    var $hasOne = array( 
            'Proyecto' => array( 
                    'className'     => 'Proyecto', 
                    'foreignKey'    => 'proyecto_id', 
                            ) 
                        ); 
  } 
?>
