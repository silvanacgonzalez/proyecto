<?php 
class ArchivoConvenio extends AppModel { 
    var $name = 'ArchivoConvenio'; 
    var $validate = array (); 
    // RELACION ARCHIVOCONVENIO:ACTAACUERDO 1:1 
    var $hasOne = array( 
            'ActaAcuerdo' => array( 
                    'className'     => 'ActaAcuerdo', 
                    'foreignKey'    => 'acta_acuerdo_id', 
                            ) 
                        ); 

    // RELACION ARCHIVOCONVENIO:CONVENIOMARCO 1:1 
    var $hasOne = array( 
            'ConvenioMarco' => array( 
                    'className'     => 'ConvenioMarco', 
                    'foreignKey'    => 'convenio_marco_id', 
                            ) 
                        ); 
    // RELACION ARCHIVOCONVENIO:CONVENIOESPECIFICO 1:1 
    var $hasOne = array( 
            'ConvenioEspecifico' => array( 
                    'className'     => 'ConvenioEspecifico', 
                    'foreignKey'    => 'convenio_especifico_id', 
                            ) 
                        ); 

  } 
?>



