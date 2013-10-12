<?php 
class ActaAcuerdo extends AppModel { 
    var $name = ' ActaAcuerdo'; 
    var $validate = array('objetivo' => array('rule' => 'notEmpty'), 
    		'respons_utn' => array('rule' => 'notEmpty'), 'estado' => array('rule' => 'notEmpty'),
    		 'proyecto_id' => array('rule' => 'notEmpty'), 'conveniomarco_id' => array('rule' => 'notEmpty'),
    		 'departamento_id' => array('rule' => 'notEmpty'), 'grupo_id' => array('rule' => 'notEmpty')); 
 
    var $hasOne = array(
	// RELACION ACTAACUERDO:PROYECTO 1:1    		 
            'Proyecto' => array( 
                    'className'     => 'Proyecto', 
                    'foreignKey'    => 'id', 
                            ), 
	// RELACION ACTAACUERDO:CONVENIOMARCO 1:1 
    		'ConvenioMarco' => array( 
                    'className'     => 'ConvenioMarco', 
                    'foreignKey'    => 'id', 
    				        ), 
    // RELACION ACTAACUERDO:ENTIDADFIRMANTE 1:1
    	'EntidadFirmante' => array(
    				'className'     => 'EntidadFirmante',
    				'foreignKey'    => 'id',
    					)
    );
    // RELACION ACTAACUERDO:DEPARTAMENTO 1:N
    var $hasMany = array(
    	'Departamento' => array(
    				'className'     => 'Departamento',
    				'foreignKey'    => 'id',
    					),
   // RELACION ACTAACUERDO:GRUPO 1:N
   		'Grupo' => array(
    				'className'     => 'Grupo',
    				'foreignKey'    => 'id',
    					)
    );
    		
  	// RELACION ACTAACUERDO:ARCHIVOCONVENIO 1:1
    var $belongsTo = array(
    	'Archivo_convenio' => array(
    				'className'     => 'Archivoconvenio',
    				'foreignKey'    => 'id',
    					),
    	);
 } 
?>

