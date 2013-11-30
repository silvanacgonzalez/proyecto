<!-- File: /app/View/Preguntas/index.ctp -->
<h1>Preguntas</h1>
<table>
	<?php echo $this->Html->link('Agregar Pregunta', array('controller' => 'preguntas', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Acciones</th>
	</tr>

	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($preguntas as $pregunta): ?>
	<tr>
		<td><?php echo $pregunta['Pregunta']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($pregunta['Pregunta']['nombre'], array('controller' => 'preguntas', 'action' => 'view', $pregunta['Pregunta']['id'])); ?>
		</td>

		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $pregunta['Pregunta']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $pregunta['Pregunta']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($pregunta); ?>
</table>
