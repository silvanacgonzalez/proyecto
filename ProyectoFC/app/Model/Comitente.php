<?php 
class Comitente extends AppModel { 
    var $name = 'Comitente'; 
    var $validate = array (); 
    
    var $hasOne = array( 
	// RELACION COMITENTE:CIUDAD 1:1
            'Ciudad' => array( 
                    'className'     => 'Ciudad', 
                    'foreignKey'    => 'ciudad_id', 
                            ), 
 
    // RELACION COMITENTE:PROVINCIA 1:1
 
            'Provincia' => array( 
                    'className'     => 'Provincia', 
                    'foreignKey'    => 'provincia_id', 
                            ), 
 
    // RELACION COMITENTE:CATEGORIAIVA 1:1
 
            'Categoria_iva' => array( 
                    'className'     => 'Categoria_iva', 
                    'foreignKey'    => 'categoria_iva_id', 
                            ), 
 

    // RELACION COMITENTE:CONVENIOESPECIFICO 1:1

    		'Convenio_especifico' => array(
    				'className'     => 'Convenio_especifico',
    				'foreignKey'    => 'convenio_especifico_id',
    		),

    // RELACION COMITENTE:CONVENIOMARCO 1:1

    		'Convenio_Marco' => array(
    				'className'     => 'Convenio_marco',
    				'foreignKey'    => 'convenio_marco_id',
    		),

    // RELACION COMITENTE:ACTAACUERDO 1:1

    		'Acta_acuerdo' => array(
    				'className'     => 'Acta_acuerdo',
    				'foreignKey'    => 'acta_acuerdo_id',
    		),

    // RELACION COMITENTE:TIPOCOMITENTE 1:1

    		'Tipo_comitente' => array(
    				'className'     => 'Tipo_comitente',
    				'foreignKey'    => 'tipo_comitente_id',
    		),


    // RELACION COMITENTE:PROYTIENECOMIT 1:1

    		'Proy_tiene_comit' => array(
    				'className'     => 'Proy_tiene_comit',
    				'foreignKey'    => 'proy_tiene_comit_id',
    		),

    // RELACION COMITENTE:REFERENTE 1:1

    		'Referente' => array(
    				'className'     => 'referente',
    				'foreignKey'    => 'referente_id',
    		)
    );
    
    
    
    
    // RELACION COMITENTE:FACTURAEMITIDAS 1:N
    var $hasMany = array(
    		'Factura_emitida' => array(
    				'className'     => 'Factura_emitida',
    				'foreignKey'    => 'factura_emitida_id',
    		),

    // RELACION COMITENTE:FACTURARECIBIDA 1:N

    		'Factura_recibida' => array(
    				'className'     => 'Factura_recibida',
    				'foreignKey'    => 'factura_recibida_id',
    		),
    
    // RELACION COMITENTE:CONTACTO 1:N

    		'Contacto' => array(
    				'className'     => 'Contacto',
    				'foreignKey'    => 'Contacto_id',
    		),

    // RELACION COMITENTE:PROYECTO 1:N

    		'Proyecto' => array(
    				'className'     => 'Proyecto',
    				'foreignKey'    => 'proyecto_id',
    		)
    );
    
    
    
  } 
?>
