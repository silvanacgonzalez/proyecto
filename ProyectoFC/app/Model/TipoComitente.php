<?php
class TipoComitente extends AppModel {
	var $name = 'TipoComitente';
	var $validate = array('nombre' => array('rule' =>'notEmpty'));
	// RELACION TIPOCOMITENTE:COMITENTE 1:N
	var $belongsTo = array(
			'Comitente' => array(
					'className'     => 'Comitente',
					'foreignKey'    => 'Comitente_id',
							)
                    	);
	
}
?>