<?php 
class Archivo extends AppModel { 
    var $name = 'Archivo'; 
    var $validate = array (); 
    // RELACION ARCHIVO:PROYECTO 1:1 
    var $hasOne = array( 
            'Proyecto' => array( 
                    'className'     => 'Proyecto', 
                    'foreignKey'    => 'proyecto_id', 
                            ) 
                        ); 
  } 
?>
