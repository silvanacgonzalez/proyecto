<?php 
class ConvenioEspecifico extends AppModel { 
    var $name = 'Convenio_especifico'; 
    var $validate = array (); 

    // RELACION CONVENIOESPECIFICO:DEPARTAMENTO 1:N 
    var $hasMany = array( 
            'Departamento' => array( 
                    'className'     => 'Departamento', 
                    'foreignKey'    => 'departamento_id', 
                            ), 
 
    // RELACION CONVENIOESPECIFICO:GRUPO 1:N 

 
            'Grupo' => array( 
                    'className'     => 'Grupo', 
                    'foreignKey'    => 'grupo_id', 
                            ) 
                        ); 


    var $hasOne = array( 
	// RELACION CONVENIOESPECIFICO:COMITENTE 1:1
            'Comitente' => array( 
                    'className'     => 'Comitente', 
                    'foreignKey'    => 'comitente_id', 
                            ), 
 
	// RELACION CONVENIOESPECIFICO:PROYECTO 1:1 

 
            'Proyecto' => array( 
                    'className'     => 'Proyecto', 
                    'foreignKey'    => 'proyecto_id', 
                            ), 
 

    // RELACION CONVENIOESPECIFICO:ARCHIVOCONVENIO 1:1
    

    		'Archivo_convenio' => array(
    				'className'     => 'Archivo_convenio',
    				'foreignKey'    => 'archivo_convenio_id',
    		)
    );
    
    
    
    
    
  } 
?>
