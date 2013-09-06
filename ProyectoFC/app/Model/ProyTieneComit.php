<?php
class ProyTieneComit extends AppModel {
	var $name = 'Proy_tiene_comit';
	var $validate = array ();
	// RELACION PROY_TIENE_COMIT:PROYECTO 1:1
	var $hasOne = array(
			'Proyecto' => array(
					'className'     => 'Proyecto',
					'foreignKey'    => 'proyecto_id',
							),
                    	
	// RELACION PROY_TIENE_COMIT:COMITENTE 1:1

			'Comitente' => array(
					'className'     => 'Comitente',
					'foreignKey'    => 'comitente_id',
			)
	);
	
}
?>