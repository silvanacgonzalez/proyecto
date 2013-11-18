<!-- File: /app/View/Equipos/index.ctp -->
<h1>Equipo</h1>
<table>
	<?php echo $this->Html->link('Agregar Equipo', array('controller' => 'equipos', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $equipos array, printing out post info -->
	<?php foreach ($equipos as $equipo): ?>
	<tr>
		<td><?php echo $equipo['Equipo']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($equipo['Equipo']['nombre'], array('controller' => 'equipos', 'action' => 'view', $equipo['Equipo']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $equipo['Equipo']['id']),
                array('confirm' => 'Está seguro de que desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $equipo['Equipo']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($equipo); ?>
</table>