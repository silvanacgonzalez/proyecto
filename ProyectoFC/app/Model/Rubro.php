<?php
class Rubro extends AppModel {
	var $name = 'Rubro';
	var $validate = array ();
	// RELACION RUBRO:RECURSOMATERIAL 1:N
	var $hasMany = array(
			'Recurso_Material' => array(
					'className'     => 'Recurso_Material',
					'foreignKey'    => 'recurso_material_id',
							),

	// RELACION RUBRO:FACT_EMIT_DETALLE 1:N

			'Fact_emit_detalle' => array(
					'className'     => 'Fact_emit_detalle',
					'foreignKey'    => 'fact_emit_detalle_id',
			),

	// RELACION RUBRO:FACT_REC_DETALLE 1:N

			'Fact_rec_detalle' => array(
					'className'     => 'Fact_rec_detalle',
					'foreignKey'    => 'fact_rec_detalle_id',
			)
	);
	
	
}
?>
