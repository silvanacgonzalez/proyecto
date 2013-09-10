<?php 
class Contacto extends AppModel { 
    var $name = 'Contacto'; 
    var $validate = array (); 
    // RELACION CONTACTO:COMITENTE 1:1
    var $hasOne = array(
    
    		'Comitente' => array(
    				'className'     => 'Comitente',
    				'foreignKey'    => 'comitente_id',
    		),
    );
    
    // RELACION CONTACTO:CIUDAD 1:1 
    var $hasOne = array( 
            'Ciudad' => array( 
                    'className'     => 'Ciudad', 
                    'foreignKey'    => 'ciudad_id', 
                            ), 
 );
    // RELACION CONTACTO:PROVINCIA 1:1 
    var $hasOne = array(
             'Provincia' => array( 
                    'className'     => 'Provincia', 
                    'foreignKey'    => 'provincia_id', 
                            ), 
 );
 //--------------------------------------------------------    
    // RELACION CONTACTO:PROYECTO 1:N
    
    var $belongsTo = array(
    		'Proyecto' => array(
    				'className'     => 'Proyecto',
    				'foreignKey'    => 'proyecto_id',
    		)
    );
    

  } 
?>
