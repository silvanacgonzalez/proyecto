<?php 
class CategoriaIva extends AppModel { 
    var $name = 'CategoriaIva'; 
    var $validate = array('descripcion' => array('rule' => 'notEmpty'));
    // RELACION CATEGORIAIVA:COMITENTE 1:N
    var $hasMany = array(
    		'Comitente' => array(
    				'className'     => 'Comitente',
    				'foreignKey'    => 'categoria_iva_id',
    		)
    );
  } 
?>
