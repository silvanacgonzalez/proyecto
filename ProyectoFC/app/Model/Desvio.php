<?php 
class Desvio extends AppModel { 
    var $name = ' Depto_gpo_dirs '; 
    var $validate = array (); 

    // RELACION DESVIO:INFORMEDEAVANCE 1:1 
    
   var $hasOne = array( 
            'Informe_de_avance' => array( 
                    'className'     => 'Informe_de_avance', 
                    'foreignKey'    => 'informe_de_avance_id', 
                            ) 
                        ); 

  } 
?>
