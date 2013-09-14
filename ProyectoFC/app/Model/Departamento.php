<?php 
class Departamento extends AppModel { 
    var $name = 'Departamento'; 
    var $validate = array('nombre' => array('rule' => 'notEmpty')); 
    
//-----------------------------------------------
    var $belongsTo = array(
	// RELACION DEPARTAMENTO:ACTAACUERDO 1:N    		
    		'ActaAcuerdo' => array(
    				'className'     => 'ActaAcuerdo',
    				'foreignKey'    => 'acta_acuerdo_id',
    		),
);
    // RELACION DEPARTAMENTO:CONVENIOESPECIFICO 1:N
    var $belongsTo = array(
    		'ConvenioEspecifico' => array(
    				'className'     => 'ConvenioEspecifico',
    				'foreignKey'    => 'convenio_especifico_id',
    		),
);
    // RELACION DEPARTAMENTO:DEPTOGRODIR 1:1
    var $belongsTo = array(
    		'DeptoGpoDir' => array(
    				'className'     => 'DeptoGpoDir',
    				'foreignKey'    => 'depto_gpo_dir_id',
    		)
    );
    // RELACION DEPARTAMENTO:GRUPO 1:N
    var $belongsTo = array(
    'Grupo' => array(
    		'className'     => 'Grupo',
    		'foreignKey'    => 'grupo_id',
    )
    );
    // RELACION DEPARTAMENTO:PROYECTO 1:N
    		var $belongsTo = array(
    		'Proyecto' => array(
    				'className'     => 'Proyecto',
    				'foreignKey'    => 'proyecto_id',
    		),
);
    
    
  } 
?>
