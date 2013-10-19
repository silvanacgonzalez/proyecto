<?php 
class Ciudad extends AppModel { 
    var $name = 'Ciudad'; 
    var $validate = array('nombre' => array('rule' => 'notEmpty'),
    		'provincia_id' => array('rule' => 'notEmpty'));
    // RELACION CIUDAD:PROVINCIA 1:1 
    var $belongsTo = array( 
            'Provincia' => array( 
                    'className'     => 'Provincia', 
                    'foreignKey'    => 'provincia_id', 
                            ) 
                        ); 
    //--------------------------------------------------------------------------------
    // RELACION CIUDAD:COMITENTE 1:N
    var $hasMany = array(
    		'Comitente' => array(
    				'className'     => 'Comitente',
    				'foreignKey'    => 'ciudad_id',
    		),
           
    // RELACION CIUDAD:CONTACTO 1:N
    		'Contacto' => array(
    				'className'     => 'Contacto',
    				'foreignKey'    => 'ciudad_id',
    		),
    // RELACION CIUDAD:PERSONA 1:N
    		
   		    'Persona' => array(
    				'className'     => 'Persona',
    				'foreignKey'    => 'ciudad_id',
    		),
    );
    }
    ?>