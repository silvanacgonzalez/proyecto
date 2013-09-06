<?php
class Plan extends AppModel {
	var $name = 'Plan';
	var $validate = array ();
	
	var $hasOne = array(
	// RELACION PLAN:PROYECTO 1:1
			'Proyecto' => array(
					'className'     => 'Proyecto',
					'foreignKey'    => 'proyecto_id',
							),
                    	
	// RELACION PLAN: RECURSOMATERIAL 1:n

			'Recurso_Material' => array(
					'className'     => 'Recurso_Material',
					'foreignKey'    => 'recurso_material_id',
			),
	
	// RELACION PLAN:EQUIPO 1:n
	
			'Equipo' => array(
					'className'     => 'Equipo',
					'foreignKey'    => 'equipo_id',
			),
	
	// RELACION PLAN:ETAPAS 1:n
	
			'Etapa' => array(
					'className'     => 'Etapa',
					'foreignKey'    => 'etapa_id',
			)
	);
	
	
}

?>
