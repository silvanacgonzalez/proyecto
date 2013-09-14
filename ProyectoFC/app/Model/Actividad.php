<?php 
class Actividad extends AppModel { 
    var $name = 'Actividad'; 
    var $validate = array('nombre' => array('rule' => 'notEmpty'), 
    	'mes_ini' => array('rule' => 'notEmpty'), 'mes_fin' => array('rule' => 'notEmpty'),
    	'etapa_id' => array('rule' => 'notEmpty'));
    
    // RELACION ACTIVIDAD:ETAPA 1:1 
    var $hasOne = array( 
            'Etapa' => array( 
                    'className'     => 'Etapa', 
                    'foreignKey'    => 'etapa_id', 
                            ) 
                        ); 
  } 
?>

