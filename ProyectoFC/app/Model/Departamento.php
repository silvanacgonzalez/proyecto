<?php 
class Departamento extends AppModel { 
    var $name = 'Departamento'; 
    var $validate = array (); 

    var $hasMany = array(
	// RELACION DEPARTAMENTO:ACTAACUERDO 1:N    		
    		'Acta_acuerdo' => array(
    				'className'     => 'Acta_acuerdo',
    				'foreignKey'    => 'acta_acuerdo_id',
    		),

    // RELACION DEPARTAMENTO:CONVENIOESPECIFICO 1:N

    		'Convenio_especifico' => array(
    				'className'     => 'Convenio_especifico',
    				'foreignKey'    => 'convenio_especifico_id',
    		),

    // RELACION DEPARTAMENTO:PROYECTO 1:N

    		'Proyecto' => array(
    				'className'     => 'Proyecto',
    				'foreignKey'    => 'proyecto_id',
    		),
    		// RELACION DEPARTAMENTO:GRUPO 1:N

			'Grupo' => array(
    						'className'     => 'Grupo',
    						'foreignKey'    => 'grupo_id',
    				)
    );
    // RELACION DEPARTAMENTO:DEPTOGRODIR 1:1
    var $hasOne = array(
    		'Depto_gpo_dir' => array(
    				'className'     => 'Depto_gpo_dir',
    				'foreignKey'    => 'depto_gpo_dir_id',
    		)
    );
    
  } 
?>
