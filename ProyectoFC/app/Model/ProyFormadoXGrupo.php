<?php
class ProyFormadoXGrupo extends AppModel {
	var $name = 'Proy_formado_x_grupo';
	var $validate = array ();
	// RELACION PROY_FORMADO_X_GRUPO:PROYECTO 1:N
	var $hasMany = array(
			'Proyecto' => array(
					'className'     => 'Proyecto',
					'foreignKey'    => 'proyecto_id',
							),

	// RELACION PROY_FORMADO_X_GRUPO:GRUPO 1:N

			'Grupo' => array(
					'className'     => 'Grupo',
					'foreignKey'    => 'grupo_id',
			)
	);
	
}
?>

