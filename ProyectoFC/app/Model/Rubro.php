<?php
class Rubro extends AppModel {
	var $name = 'Rubro';
    var $validate = array('nombre' => array('rule' =>'notEmpty'));
			
		
	//---------------------------------------------
	// RELACION RUBRO:RECURSOMATERIAL 1:N
	var $belongsTo = array(
			'RecursoMaterial' => array(
					'className'     => 'RecursoMaterial',
					'foreignKey'    => 'recurso_material_id',
							),);

	// RELACION RUBRO:FACT_EMIT_DETALLE 1:N
			var $belongsTo = array(
			'FactEmitDetalle' => array(
					'className'     => 'FactEmitDetalle',
					'foreignKey'    => 'fact_emit_detalle_id',
			),);

	// RELACION RUBRO:FACT_REC_DETALLE 1:N
		var $belongsTo = array(
			'FactRecDetalle' => array(
					'className'     => 'FactRecDetalle',
					'foreignKey'    => 'fact_rec_detalle_id',
			)
	);
	
	
}
?>
