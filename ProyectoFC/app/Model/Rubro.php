<?php
class Rubro extends AppModel {
	var $name = 'Rubro';
    var $validate = array('nombre' => array('rule' =>'notEmpty'));
	//---------------------------------------------
	// RELACION RUBRO:RECURSOMATERIAL 1:N
	var $hasMany = array(
			'RecursoMaterial' => array(
					'className'     => 'RecursoMaterial',
					'foreignKey'    => 'rubro_id',
							),
	// RELACION RUBRO:FACT_EMIT_DETALLE 1:N
			'FactEmitDetalle' => array(
					'className'     => 'FactEmitDetalle',
					'foreignKey'    => 'rubro_id',
			),
	// RELACION RUBRO:FACT_REC_DETALLE 1:N
			'FactRecDetalle' => array(
					'className'     => 'FactRecDetalle',
					'foreignKey'    => 'rubro_id',
			)
	);
	
	
}
?>
