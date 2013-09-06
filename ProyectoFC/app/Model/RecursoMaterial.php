<?php
class RecursoMaterial extends AppModel {
	var $name = 'Recurso_Material';
	var $validate = array ();
	// RELACION RECURSOMATERIAL:PLAN 1:n
	var $hasMany = array(
			'Plan' => array(
					'className'     => 'Plan',
					'foreignKey'    => 'plan_id',
							)
                    	);
	// RELACION RECURSOMATERIAL:RUBRO 1:1
	var $hasOne = array(
			'Rubro' => array(
					'className'     => 'Rubro',
					'foreignKey'    => 'rubro_id',
			)
	);
	
	
}
?>