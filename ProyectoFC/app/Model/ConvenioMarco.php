<?php 
class ConvenioMarco extends AppModel { 
    var $name = 'ConvenioMarco'; 
    var $validate = array('fecha_ini' => array('rule' => 'notEmpty'),
    		'fecha_creacion' => array('rule' => 'notEmpty'), 
    		'objetivo' => array('rule' => 'notEmpty'),
    		'estado' => array('rule' => 'notEmpty'),
    		'comitente_id' => array('rule' => 'notEmpty'));
  		       
    // RELACION CONVENIOMARCO:COMITENTE 1:1 
    
   var $belongsTo = array( 
            'Comitente' => array( 
                    'className'     => 'Comitente', 
                    'foreignKey'    => 'comitente_id', 
                            ) ,
   // RELACION CONVENIOMARCO:ENTIDADFIRMANTE 1:1
   		'EntidadFirmante' => array(
   				'className'     => 'EntidadFirmante',
   				'foreignKey'    => 'entidad_firmante_id',
   		)
   );

   
   //---------------------------------------------------------
   // RELACION CONVENIOMARCO:ACTAACUERDO 1:N
   
   var $hasMany = array(
   		'ActaAcuerdo' => array(
   				'className'     => 'ActaAcuerdo',
   				'foreignKey'    => 'convenio_marco_id',
   		),
   	// RELACION CONVENIOMARCO:ARCHIVOCONVENIO 1:1
   
   		'ArchivoConvenio' => array(
   				'className'     => 'ArchivoConvenio',
   				'foreignKey'    => 'convenio_marco_id',
   		)
   );
   
  } 
?>
