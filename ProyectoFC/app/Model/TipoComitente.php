<?php
class TipoComitente extends AppModel {
	var $name = 'Tipo_Comitente';
	var $validate = array ();
	// RELACION TIPOCOMITENTE:COMITENTE 1:N
	var $hasMany = array(
			'Comitente' => array(
					'className'     => 'Comitente',
					'foreignKey'    => 'Comitente_id',
							)
                    	);
	
}
?>