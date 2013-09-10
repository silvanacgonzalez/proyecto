<?php 
class Categoria_persona extends AppModel { 
    var $name = 'Categoria_persona'; 
    var $validate = array (); 
    // RELACION CATEGORIAPERSONA:INTEGRANTE 1:N
    var $belongsto = array(
    		'Integrante' => array(
    				'className'     => 'Integrante',
    				'foreignKey'    => 'integrante_id',
    		)
    );
  } 
?>
