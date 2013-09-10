<?php 
class Categoria extends AppModel { 
    var $name = 'Categoria'; 
    var $validate = array (); 
    // RELACION CATEGORIA:PROYECTO 1:N
    var $belongsTo = array(
    		'Proyecto' => array(
    				'className'     => 'Proyecto',
    				'foreignKey'    => 'proyecto_id',
    		)
    );
  } 
?>

