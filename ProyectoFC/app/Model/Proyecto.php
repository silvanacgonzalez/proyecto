<?php
class Proyecto extends AppModel {
	var $name = 'Proyecto';
	var $validate = array('nombre' => array('rule' =>'notEmpty'),
			'categoria_id' => array('rule' => 'notEmpty'),
			'grupo_id' => array('rule' => 'notEmpty'),
			'departamento_id' => array('rule' => 'notEmpty'),
			'comitente_id' => array('rule' => 'notEmpty'),
			'contacto_id' => array('rule' => 'notEmpty'),
			'director_id' => array('rule' => 'notEmpty'),
			'clasificacion_id' => array('rule' => 'notEmpty'),
			'referente_id' => array('rule' => 'notEmpty'),
			'estado_id' => array('rule' => 'notEmpty'));
	
	// RELACION PROYECTO:CATEGORIA 1:1
	var $belongsTo = array(
	'Categoria' => array(
			'className'     => 'Categoria',
			'foreignKey'    => 'categoria_id',
	),
	// RELACION PROYECTO:GRUPO 1:N
// 	'Grupo' => array(
// 			'className'     => 'Grupo',
// 			'foreignKey'    => 'grupo_id',
// 	),
	// RELACION PROYECTO:DEPARTAMENTO 1:N
	'Departamento' => array(
			'className'     => 'Departamento',
			'foreignKey'    => 'departamento_id',
	),
	// RELACION PROYECTO:COMITENTE 1:1
// 	'Comitente' => array(
// 			'className'     => 'Comitente',
// 			'foreignKey'    => 'comitente_id',
// 	),
	// RELACION PROYECTO:CONTACTO 1:1
	'Contacto' => array(
			'className'     => 'Contacto',
			'foreignKey'    => 'contacto_id',
	),
	// RELACION PROYECTO:DIRECTOR 1:1
	'Director' => array(
			'className'     => 'Director',
			'foreignKey'    => 'director_id',
	),
	// RELACION PROYECTO:CLASIFICACION 1:1
	'Clasificacion' => array(
			'className'     => 'Clasificacion',
			'foreignKey'    => 'clasificacion_id',
	),
	// RELACION PROYECTO:REFERENTE 1:1
	'Referente' => array(
			'className'     => 'Referente',
			'foreignKey'    => 'referente_id',
	),
	// RELACION PROYECTO:ESTADO 1:1
	'Estado' => array(
			'className'     => 'Estado',
			'foreignKey'    => 'estado_id',
	),);
	//-------------------------------------------------------------
	
	// RELACION PROYECTO:ACTA_ACUERDO 1:1
	var $hasMany = array(
			'ActaAcuerdo' => array(
					'className'     => 'ActaAcuerdo',
					'foreignKey'    => 'proyecto_id',
			),
	// RELACION PROYECTO:ARCHIVO 1:N
			'Archivo' => array(
					'className'     => 'Archivo',
					'foreignKey'    => 'proyecto_id',
			),
	// RELACION PROYECTO:CONVENIOESPECIFICO 1:1
			'ConvenioEspecifico' => array(
					'className'     => 'ConvenioEspecifico',
					'foreignKey'    => 'proyecto_id',
			),
	// RELACION PROYECTO:HISTORIA 1:N
					'Historia' => array(
							'className'     => 'Historia',
							'foreignKey'    => 'proyecto_id',
					),
	// RELACION PROYECTO:INFORMEDEAVANCE 1:N
					'InformeAvance' => array(
							'className'     => 'InformeAvance',
							'foreignKey'    => 'proyecto_id',
					),
	// RELACION PROYECTO:NOTIFICACION 1:N
	'Notificacion' => array(
			'className'     => 'Notificacion',
			'foreignKey'    => 'proyecto_id',
	),	
	
	
	// RELACION PROYECTO:PLAN 1:1
		'Plan' => array(
					'className'     => 'Plan',
					'foreignKey'    => 'proyecto_id',
			),);
	
	
				
	// RELACION PROYECTO:CIERRE 1:1
	var $hasOne = array(
			'Cierre' => array(
					'className'     => 'Cierre',
					'foreignKey'    => 'proyecto_id',
			),
	// RELACION PROYECTO:ENCUESTA 1:1
			'Encuesta' => array(
					'className'     => 'Encuesta',
					'foreignKey'    => 'proyecto_id',
			),
	// RELACION PROYECTO:RETENCION 1:1
			'Retencion' => array(
					'className'     => 'Retencion',
					'foreignKey'    => 'proyecto_id',
			)
);


	
		
	// RELACION PROYECTO:PROY_FORMADO_X_GRUPO 1:1
	//var $belongsTo = array(
		//	'ProyFormadoXGrupo' => array(
			//		'className'     => 'ProyFormadoXGrupo',
				//	'foreignKey'    => 'proy_formado_x_grupo_id',
			//),);

	// RELACION PROYECTO:PROY_TIENE_COMITS 1:1
	//var $belongsTo = array(
		//	'ProyTieneComit' => array(
			//		'className'     => 'ProyTieneComit',
				//	'foreignKey'    => 'proy_tiene_comit_id',
			//),);
	
	
			
}
?>