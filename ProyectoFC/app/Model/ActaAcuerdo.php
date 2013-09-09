<?php 
class ActaAcuerdo extends AppModel { 
    var $name = ' Acta_acuerdo'; 
    var $validate = array (); 
    var $hasOne = array(
	// RELACION ACTAACUERDO:PROYECTO 1:1    		 
            'Proyecto' => array( 
                    'className'     => 'Proyecto', 
                    'foreignKey'    => 'proyecto_id', 
                            ), 

    // RELACION ACTAACUERDO:CONVENIOMARCO 1:1 
     
            'Convenio_Marco' => array( 
                    'className'     => 'Convenio_Marco', 
                    'foreignKey'    => 'convenio_marco_id', 
            ), 
 
    // RELACION ACTAACUERDO:ARCHIVOCONVENIO 1:1

    		'Archivo_convenio' => array(
    				'className'     => 'archivo_convenio',
    				'foreignKey'    => 'archivo_convenio_id',
    		),
    );
    
    // RELACION ACTAACUERDO:DEPARTAMENTO 1:N
    var $hasMany = array(
    		'Departamento' => array(
    				'className'     => 'Departamento',
    				'foreignKey'    => 'departamento_id',
    		),
        
    // RELACION ACTAACUERDO:GRUPO 1:N
    
    		'Grupo' => array(
    				'className'     => 'Grupo',
    				'foreignKey'    => 'grupo_id',
    		)
    );    
        
  } 
?>

