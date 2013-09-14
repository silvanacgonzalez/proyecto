<?php
class Retencion extends AppModel {
	var $name = 'Retencion';
	var $validate = array('canon_inst' => array('rule' =>'notEmpty'),
			'canon_inst_monto' => array('rule' => 'notEmpty'),
			'fondo_reserva' => array('rule' => 'notEmpty'),
			'fondo_reserva_monto' => array('rule' => 'notEmpty'),
			'ente_ejecutor' => array('rule' => 'notEmpty'),
			'ente_ejecutor_monto' => array('rule' => 'notEmpty'),
			'proyecto_id' => array('rule' => 'notEmpty'));
	
	
	
	id
	canon_inst
	canon_inst_monto
	fondo_reserva
	fondo_reserva_monto
	ente_ejecutor
	ente_ejecutor_monto
	grab_ope
	grab_fecha
	modif_ope
	modif_fecha
	proyecto_id
	
	// RELACION RETENCION:PROYECTO 1:1
	var $hasOne = array(
			'Proyecto' => array(
					'className'     => 'Proyecto',
					'foreignKey'    => 'proyecto_id',
							)
                    	);
	
}
?>