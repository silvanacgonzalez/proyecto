<?php 
class ConvenioMarco extends AppModel { 
    var $name = 'Convenio_marco'; 
    var $validate = array (); 

    // RELACION CONVENIOMARCO:COMITENTE 1:1 
    
   var $hasOne = array( 
            'Comitente' => array( 
                    'className'     => 'Comitente', 
                    'foreignKey'    => 'comitente_id', 
                            ), 
 
   // RELACION CONVENIOMARCO:ARCHIVOCONVENIO 1:1
   

   		'Archivo_convenio' => array(
   				'className'     => 'Archivo_convenio',
   				'foreignKey'    => 'archivo_convenio_id',
   		)
   );
   // RELACION CONVENIOMARCO:ACTAACUERDO 1:N
    
   var $hasMany = array(
   		'Acta_acuerdo' => array(
   				'className'     => 'acta_acuerdo',
   				'foreignKey'    => 'acta_acuerdo_id',
   		)
   );

  } 
?>
