<?php 
class ArchivoConvenio extends AppModel { 
    var $name = 'Archivo_convenio'; 
    var $validate = array (); 
   
    var $hasOne = array( 
	// RELACION ARCHIVOCONVENIO:ACTAACUERDO 1:1
            'Acta_Acuerdo' => array( 
                    'className'     => 'Acta_acuerdo', 
                    'foreignKey'    => 'acta_acuerdo_id', 
                            ), 
 
    // RELACION ARCHIVOCONVENIO:CONVENIOMARCO 1:1 
  
            'Convenio_Marco' => array( 
                    'className'     => 'Convenio_Marco', 
                    'foreignKey'    => 'convenio_marco_id', 
                            ), 
 
    // RELACION ARCHIVOCONVENIO:CONVENIOESPECIFICO 1:1 
 
            'Convenio_Especifico' => array( 
                    'className'     => 'Convenio_Especifico', 
                    'foreignKey'    => 'convenio_especifico_id', 
                            ) 
                        ); 



  } 
?>



