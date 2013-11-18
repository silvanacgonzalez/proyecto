<!-- File: /app/View/MotivoCierres/index.ctp -->
<h1>Motivo de cierre</h1>
<table>
	<?php echo $this->Html->link('Agregar Motivo de Cierre', array('controller' => 'motivocierres', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $motivocierres array, printing out post info -->
	<?php foreach ($motivocierres as $motivocierre): ?>
	<tr>
		<td><?php echo $motivocierre['MotivoCierre']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($motivocierre['MotivoCierre']['nombre'], array('controller' => 'motivocierres', 'action' => 'view', $motivocierre['MotivoCierre']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Borrar',
                array('action' => 'delete', $motivocierre['MotivoCierre']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Editar', array('action' => 'edit', $motivocierre['MotivoCierre']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($motivocierre); ?>
</table>