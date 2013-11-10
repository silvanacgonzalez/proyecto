<!-- File: /app/View/Clasificacions/index.ctp -->
<?php
//echo $this->Html->script(array('/webroot/js/jquery-1.8.3.min', '/webroot/js/jquery-ui-1.9.2.custom.min'), array('inline' => 'false'));
//echo $this->Html->css('/webroot/css/jquery-ui-1.9.2.custom', null, array('inline' => false));

?>
<head>
	<style type="text/css">
	body {
		margin-top: 50px;
		margin-bottom: 100px;
	}
	</style>
</head>
<div class="well">
<h1>clasificaciones de Personas</h1>
</div>

	<button class="btn btn-info">
	<?php echo $this->Html->link('Agregar Clasificacion', array('controller' => 'clasificacions', 'action' => 'add')); ?>
	</button>
	<p></p>

	<table  class="table table-hover">
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Accion</th>
		
	</tr>
	<!-- Here is where we loop through our $posts array, printing out post info -->
	<?php foreach ($clasificacions as $clasificacion): ?>
	<tr>
		<td><?php echo $clasificacion['Clasificacion']['id']; ?></td>
		<td>
			<?php echo $this->Html->link($clasificacion['Clasificacion']['nombre'], array('controller' => 'clasificacions', 'action' => 'view', $clasificacion['Clasificacion']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $clasificacion['Clasificacion']['id']),
                array('confirm' => 'Desea Borrar?'));?>
                
                
		<?php echo $this->Html->link (__('Editar', true), array('action' => 'edit', $clasificacion['Clasificacion']['id'])); ?>
				
		</td>
		
	</tr>
	<?php endforeach; ?>
	<?php unset($clasificacion); ?>
	<?php echo $this->Js->writeBuffer(); ?>
</table>