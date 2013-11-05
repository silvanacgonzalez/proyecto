<!-- File: /app/View/PagoMensuals/index.ctp -->
<h1>Pago Mensuals</h1>
<table>
	<?php echo $this->Html->link('Agregar PagoMensual', array('controller' => 'pagomensuals', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($pagomensuals as $pagomensual): ?>
	<tr>
		<td><?php echo $pagomensual['PagoMensual']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($pagomensual['PagoMensual']['nombre'], array('controller' => 'pagomensuals', 'action' => 'view', $pagomensual['PagoMensual']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $pagomensual['PagoMensual']['id']),
                array('confirm' => 'Está seguro de que desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $pagomensual['PagoMensual']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($pagomensual); ?>
</table>