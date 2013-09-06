<?php 
class Cierre extends AppModel { 
    var $name = 'Cierre'; 
    var $validate = array (); 
    // RELACION CIERRE:PROYECTO 1:1 
    var $hasOne = array( 
            'Proyecto' => array( 
                    'className'     => 'Proyecto', 
                    'foreignKey'    => 'proyecto_id', 
                            ) 
                        ); 

    // RELACION CIERRE:MOTIVOCIERRE 1:N 
    var $hasMany = array( 
            'Motivo_cierre' => array( 
                    'className'     => 'Motivo_cierre', 
                    'foreignKey'    => 'motivo_cierre_id', 
                            ), 
 
    // RELACION CIERRE:PREGUNTACIERRE 1:N

    		'Pregunta' => array(
    				'className'     => 'Preg_cierre',
    				'foreignKey'    => 'preg_cierre_id',
    		)
    	);
    }
    ?>