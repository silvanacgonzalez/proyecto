<!-- File: /app/View/EntidadFirmantes/index.ctp -->
<h1>Entidad Firmante</h1>
<table>
	<?php echo $this->Html->link('Agregar Entidad Firmante', array('controller' => 'entidadfirmantes', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $entidadfirmante array, printing out post info -->
	<?php foreach ($entidadfirmantes as $entidadfirmante): ?>
	<tr>
		<td><?php echo $entidadfirmante['EntidadFirmante']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($entidadfirmante['EntidadFirmante']['nombre'], array('controller' => 'entidadfirmantes', 'action' => 'view', $entidadfirmante['EntidadFirmante']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Borrar',  array('action' => 'delete', $entidadfirmante['EntidadFirmante']['id']),  array('confirm' => 'Desea borrar?'));?>
                
        	         
		<?php echo $this->Html->link('Editar', array('action' => 'edit', $entidadfirmante['EntidadFirmante']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($entidadfirmante); ?>
</table>