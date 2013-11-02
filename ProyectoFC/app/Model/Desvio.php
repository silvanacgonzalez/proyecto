<?php 
class Desvio extends AppModel { 
    var $name = 'Desvio'; 
     var $validate = array('descripcion' => array('rule' => 'notEmpty'),
  		 'informe_de_avance' => array('rule' => 'notEmpty')); 
     

    // RELACION DESVIO:INFORMEDEAVANCE 1:1 
    
   var $belongsTo = array( 
            'InformeDeAvance' => array( 
                    'className'     => 'InformeAvance', 
                    'foreignKey'    => 'informe_avance_id', 
                            ) 
                        ); 

  } 
?>
