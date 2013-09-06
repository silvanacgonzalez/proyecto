<?php 
class CategoriaIva extends AppModel { 
    var $name = 'Categoria_iva'; 
    var $validate = array (); 
    // RELACION CATEGORIAIVA:COMITENTE 1:N
    var $hasMany = array(
    		'Comitente' => array(
    				'className'     => 'Comitente',
    				'foreignKey'    => 'comitente_id',
    		)
    );
  } 
?>
