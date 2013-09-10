<?php 
class CategoriaIva extends AppModel { 
    var $name = 'CategoriaIva'; 
    var $validate = array (); 
    // RELACION CATEGORIAIVA:COMITENTE 1:N
    var $belongsto = array(
    		'Comitente' => array(
    				'className'     => 'Comitente',
    				'foreignKey'    => 'comitente_id',
    		)
    );
  } 
?>
