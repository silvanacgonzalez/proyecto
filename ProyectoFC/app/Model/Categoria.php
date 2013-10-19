<?php 
class Categoria extends AppModel { 
    var $name = 'Categoria'; 
    var $validate = array('nombre' => array('rule' => 'notEmpty'));
    // RELACION CATEGORIA:PROYECTO 1:N
    var $hasMany = array(
    		'Proyecto' => array(
    				'className'     => 'Proyecto',
    				'foreignKey'    => 'categoria_id',
    		)
    );
  } 
?>
