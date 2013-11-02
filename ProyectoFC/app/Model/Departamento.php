<?php 
class Departamento extends AppModel { 
    var $name = 'Departamento'; 
    var $validate = array('nombre' => array('rule' => 'notEmpty')); 
    
//-----------------------------------------------
    var $hasMany = array(
	// RELACION DEPARTAMENTO:ACTAACUERDO 1:N    		
    'ActaAcuerdo' => array(
    				'className'     => 'ActaAcuerdo',
    				'foreignKey'    => 'departamento_id',
    		),
    // RELACION DEPARTAMENTO:CONVENIOESPECIFICO 1:N
    'ConvenioEspecifico' => array(
    				'className'     => 'ConvenioEspecifico',
    				'foreignKey'    => 'departamento_id',
    		),
    // RELACION DEPARTAMENTO:GRUPO 1:N
    'Grupo' => array(
    		'className'     => 'Grupo',
    		'foreignKey'    => 'departamento_id',
    ),
    	
    // RELACION DEPARTAMENTO:PROYECTO 1:N
    'Proyecto' => array(
    				'className'     => 'Proyecto',
    				'foreignKey'    => 'departamento_id',
    		),
);
    
    
    
    // RELACION DEPARTAMENTO:DEPTOGRODIR 1:1
    //		var $belongsTo = array(
    	//			'DeptoGpoDir' => array(
    		//				'className'     => 'DeptoGpoDir',
    			//			'foreignKey'    => 'depto_gpo_dir_id',
    				//)
    		//);
    		
    		
    		
  } 
?>

