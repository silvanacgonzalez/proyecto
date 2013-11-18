<?php 
class Desvio extends AppModel { 
    var $name = 'Desvio'; 
     var $validate = array('descripcion' => array('rule' => 'notEmpty'),
  		 'informe_avance' => array('rule' => 'notEmpty')); 
     

    // RELACION DESVIO:INFORMEDEAVANCE 1:1 
    
   var $belongsTo = array( 
            'InformeAvance' => array( 
                    'className'     => 'InformeAvance', 
                    'foreignKey'    => 'informe_avance_id', 
                            ) 
                        ); 

  } 
?>
