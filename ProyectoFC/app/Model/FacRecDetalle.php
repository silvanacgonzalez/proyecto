<?php
class FacRecDetalle extends AppModel {
	var $name = 'FacRecDetalle';
	var $validate = array('descripcion' => array('rule' => 'notEmpty'), 'cantidad' => array('rule' => 'notEmpty'), 'monto' => array('rule' => 'notEmpty'));
	//Relacion FacRecDetalle:Rubro 1.1
	var $belongsTo = array(
			'Rubro' => array(
					'className'  	=> 'Rubro',
					'foreignKey'    => 'rubro_id',
					//'conditions'  => array('Comentario.estado' => '1'),
					'order'      	=> 'FacRecDetalle.id DESC'
			)
	);
	//Relacion FacRecDetalle:FacturaEmitida 1.1
	var $belongsTo = array(
			'FacturaRecibida' => array(
					'className'  	=> 'FacturaRecibida',
					'foreignKey'    => 'factura_recibida_id',
					//'conditions'  => array('Comentario.estado' => '1'),
					'order'      	=> 'FacRecDetalle.id DESC'
			)
	);
}
?>