<?php 
class CategoriaPersona extends AppModel { 
    var $name = 'CategoriaPersona'; 
     var $validate = array('nombre' => array('rule' => 'notEmpty'));
    // RELACION CATEGORIAPERSONA:INTEGRANTE 1:N
    var $hasMany = array(
    		'Integrante' => array(
    				'className'     => 'Integrante',
    				'foreignKey'    => 'categoria_persona_id',
    		)
    );
  } 
?>
