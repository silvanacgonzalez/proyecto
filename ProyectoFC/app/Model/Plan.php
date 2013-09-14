<?php
class Plan extends AppModel {
	var $name = 'Plan';
    var $validate = array('fecha_ini_prob ' => array('rule' =>'notEmpty'), 
    		'fecha_fin_prob' => array('rule' => 'notEmpty'), 
    		'proyecto_id' => array('rule' => 'notEmpty'));
	var $hasOne = array(
	// RELACION PLAN:PROYECTO 1:1
			'Proyecto' => array(
					'className'     => 'Proyecto',
					'foreignKey'    => 'proyecto_id',
							),
                    	);
	//-------------------------------------------------------

	// RELACION PLAN:EQUIPO 1:n
	var $belongsTo = array(
	'Equipo' => array(
			'className'     => 'Equipo',
			'foreignKey'    => 'equipo_id',
	),
	);
	// RELACION PLAN:ETAPAS 1:n
	var $belongsTo = array(
	'Etapa' => array(
			'className'     => 'Etapa',
			'foreignKey'    => 'etapa_id',
	)
	);
	
	// RELACION PLAN: RECURSOMATERIAL 1:n
	var $belongsTo = array(
			'RecursoMaterial' => array(
					'className'     => 'RecursoMaterial',
					'foreignKey'    => 'recurso_material_id',
			),
		
		);
	
}

?>
