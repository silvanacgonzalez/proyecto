<?php
class FacEmitDetalle extends AppModel {
	var $name = 'FacEmitDetalle';
	var $validate = array('descripcion' => array('rule' => 'notEmpty'), 'cantidad' => array('rule' => 'notEmpty'), 'monto' => array('rule' => 'notEmpty'));
	//Relacion FacEmitDetalle:Rubro 1.1
	var $belongsTo = array(
			'Rubro' => array(
					'className'  	=> 'Rubro',
					'foreignKey'    => 'rubro_id',
					//'conditions'  => array('Comentario.estado' => '1'),
			),
	//Relacion FacEmitDetalle:FacturaEmitida 1.1
	'FacturaEmitida' => array(
					'className'  	=> 'FacturaEmitida',
					'foreignKey'    => 'factura_emitida_id',
					//'conditions'  => array('Comentario.estado' => '1'),
	
			)
		);
}
?>