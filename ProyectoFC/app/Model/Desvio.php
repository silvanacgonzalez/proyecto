<?php 
class Desvio extends AppModel { 
    var $name = 'Desvio'; 
    var $validate = array (); 

    // RELACION DESVIO:INFORMEDEAVANCE 1:1 
    
   var $hasOne = array( 
            'InformeDeAvance' => array( 
                    'className'     => 'InformeDeAvance', 
                    'foreignKey'    => 'informe_de_avance_id', 
                            ) 
                        ); 

  } 
?>
