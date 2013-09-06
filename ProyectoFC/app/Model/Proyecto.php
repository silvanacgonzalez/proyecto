<?php
class Proyecto extends AppModel {
	var $name = 'Proyecto';
	var $validate = array ();
	// RELACION PROYECTO:ACTA_ACUERDO 1:1
	var $hasOne = array(
			'Acta_acuerdo' => array(
					'className'     => 'Acta_acuerdo',
					'foreignKey'    => 'acta_acuerdo_id',
			),


	// RELACION PROYECTO:CATEGORIA 1:1

			'Categoria' => array(
					'className'     => 'Categoria',
					'foreignKey'    => 'categoria_id',
							),

	// RELACION PROYECTO:COMITENTE 1:1

			'Comitente' => array(
					'className'     => 'Comitente',
					'foreignKey'    => 'comitente_id',
			),

	// RELACION PROYECTO:CONTACTO 1:1

			'Contacto' => array(
					'className'     => 'Contacto',
					'foreignKey'    => 'contacto_id',
			),

	// RELACION PROYECTO:CIERRE 1:1

			'Cierre' => array(
					'className'     => 'Cierre',
					'foreignKey'    => 'cierre_id',
			),
	
	// RELACION PROYECTO:CLASIFICACION 1:1
	
			'Clasificacion' => array(
					'className'     => 'Clasificacion',
					'foreignKey'    => 'clasificacion_id',
			),

	// RELACION PROYECTO:CONVENIOESPECIFICO 1:1

			'Convenio_Especifico' => array(
					'className'     => 'Convenio_Especifico',
					'foreignKey'    => 'convenio_especifico_id',
			),

	

	// RELACION PROYECTO:DIRECTOR 1:1

			'Director' => array(
					'className'     => 'Director',
					'foreignKey'    => 'director_id',
			),

	// RELACION PROYECTO:ENCUESTA 1:1

			'Encuesta' => array(
					'className'     => 'Encuesta',
					'foreignKey'    => 'encuesta_id',
			),

	// RELACION PROYECTO:ESTADO 1:1

			'Estado' => array(
					'className'     => 'Estado',
					'foreignKey'    => 'estado_id',
			),



	// RELACION PROYECTO:PLAN 1:1

			'Plan' => array(
					'className'     => 'Plan',
					'foreignKey'    => 'plan_id',
			),

		
	
	// RELACION PROYECTO:PROY_FORMADO_X_GRUPO 1:1

			'proy_formado_x_grupo' => array(
					'className'     => 'proy_formado_x_grupo',
					'foreignKey'    => 'proy_formado_x_grupo_id',
			),

	
	// RELACION PROYECTO:PROY_TIENE_COMITS 1:1

			'proy_tiene_comit' => array(
					'className'     => 'proy_tiene_comit',
					'foreignKey'    => 'proy_tiene_comit_id',
			),


	// RELACION PROYECTO:REFERENTE 1:1

			'Referente' => array(
					'className'     => 'Referente',
					'foreignKey'    => 'referente_id',
			),

	// RELACION PROYECTO:RETENCION 1:1

			'Retencion' => array(
					'className'     => 'Retencion',
					'foreignKey'    => 'retencion_id',
			)
);
	
	
	
	// RELACION PROYECTO:ARCHIVO 1:N
	var $hasMany = array(
			'Archivo' => array(
					'className'     => 'Archivo',
					'foreignKey'    => 'archivo_id',
			),

	
	
	
	// RELACION PROYECTO:GRUPO 1:N

			'Grupo' => array(
					'className'     => 'Grupo',
					'foreignKey'    => 'grupo_id',
			),

	
	
	// RELACION PROYECTO:DEPARTAMENTO 1:N

			'Departamento' => array(
					'className'     => 'Departamento',
					'foreignKey'    => 'departamento_id',
			),

	
	// RELACION PROYECTO:HISTORIA 1:N

			'Historia' => array(
					'className'     => 'Historia',
					'foreignKey'    => 'historia_id',
			),

	// RELACION PROYECTO:INFORMEDEAVANCE 1:N

			'Informe_de_Avance' => array(
					'className'     => 'Informe_de_Avance',
					'foreignKey'    => 'informe_de_Avance_id',
			)
	);
		
}
?>