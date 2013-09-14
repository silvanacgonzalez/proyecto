<?php 
class Cierre extends AppModel { 
    var $name = 'Cierre'; 
     var $validate = array('proyecto_id' => array('rule' => 'notEmpty'), 
     	'motivo_cierre_id' => array('rule' => 'notEmpty'));
        
    // RELACION CIERRE:PROYECTO 1:1 
    var $hasOne = array( 
            'Proyecto' => array( 
                    'className'     => 'Proyecto', 
                    'foreignKey'    => 'proyecto_id', 
                            ) 
                        ); 

    // RELACION CIERRE:MOTIVOCIERRE 1:N 
    var $hasMany = array( 
            'MotivoCierre' => array( 
                    'className'     => 'MotivoCierre', 
                    'foreignKey'    => 'motivo_cierre_id', 
                            ), 
    		);
 //-----------------------------------------------------------------------
    // RELACION CIERRE:PREGUNTACIERRE 1:N
    var $belongsTo = array(
    		'PregCierre' => array(
    				'className'     => 'PregCierre',
    				'foreignKey'    => 'preg_cierre_id',
    		)
    	);
    }
    ?>