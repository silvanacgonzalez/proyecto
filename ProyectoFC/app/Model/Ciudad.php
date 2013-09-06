<?php 
class Ciudad extends AppModel { 
    var $name = 'Ciudad'; 
    var $validate = array (); 
    // RELACION CIUDAD:PROVINCIA 1:1 
    var $hasOne = array( 
            'Provincia' => array( 
                    'className'     => 'Provincia', 
                    'foreignKey'    => 'provincia_id', 
                            ) 
                        ); 
    // RELACION CIUDAD:COMITENTE 1:N
    var $hasMany = array(
    		'Comitente' => array(
    				'className'     => 'Comitente',
    				'foreignKey'    => 'comitente_id',
    		),

    // RELACION CIUDAD:CONTACTO 1:N

    		'Contacto' => array(
    				'className'     => 'Contacto',
    				'foreignKey'    => 'contacto_id',
    		),

    // RELACION CIUDAD:PERSONA 1:N

    		'Persona' => array(
    				'className'     => 'Persona',
    				'foreignKey'    => 'persona_id',
    		)
    );
    }
    ?>