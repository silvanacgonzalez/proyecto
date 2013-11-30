<?php
class InformeAvance extends AppModel {
	var $name = 'InformeAvance';
	var $validate = array('fecha_fin_etapa' => array('rule' => 'notEmpty'), 'periodo_reporte_ini' => array('rule' => 'notEmpty'), 'periodo_reporte_fin' => array('rule' => 'notEmpty'), 'desvio' => array('rule' => 'notEmpty'), 'fecha_reporte' => array('rule' => 'notEmpty'));
	//Relacion InformeDeAvance:Proyecto 1.1
	var $belongsTo = array(
			'Proyecto' => array(
					'className'  	=> 'Proyecto',
					'foreignKey'    => 'proyecto_id',
					//'conditions'  => array('Comentario.estado' => '1'),
			)
	);
	//Relacion InformeDeAvance:Desvio 1.n
	var $hasMany = array(
			'Desvio' => array(
					'className'  	=> 'Desvio',
					'foreignKey'    => 'informe_avance_id',
					//'conditions'  => array('Comentario.estado' => '1'),
			)
	);
}
?>