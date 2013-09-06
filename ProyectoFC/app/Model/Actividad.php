<?php 
class Actividad extends AppModel { 
    var $name = 'Actividad'; 
    var $validate = array (); 
    // RELACION ACTIVIDAD:ETAPA 1:1 
    var $hasOne = array( 
            'Etapa' => array( 
                    'className'     => 'Etapa', 
                    'foreignKey'    => 'etapa_id', 
                            ) 
                        ); 
  } 
?>
