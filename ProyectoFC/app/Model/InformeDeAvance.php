<?php
class InformeDeAvance extends AppModel {
	var $name = 'InformeDeAvance';
	var $validate = array('fecha_fin_etapa' => array('rule' => 'notEmpty'), 'periodo_reporte_ini' => array('rule' => 'notEmpty'), 'periodo_reporte_fin' => array('rule' => 'notEmpty'), 'desvio' => array('rule' => 'notEmpty'), 'fecha_reporte' => array('rule' => 'notEmpty'));
	//Relacion InformeDeAvance:Proyecto 1.1
	var $hasOne = array(
			'Proyecto' => array(
					'className'  => 'Proyecto',
					'foreignKey'    => 'proyecto_id',
					//'conditions'    => array('Comentario.estado' => '1'),
					'order'      => 'InformeDeAvance.id DESC'
			)
	);
}
?>