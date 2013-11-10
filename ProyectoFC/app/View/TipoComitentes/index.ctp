<!-- File: /app/View/TipoComitentes/index.ctp -->
<h1>TipoComitentes</h1>
<table>
	<?php echo $this->Html->link('Agregar TipoComitente', array('controller' => 'tipocomitentes', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Accion</th>

</tr>

	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($tipocomitentes as $tipocomitente): ?>
	<tr>
		<td><?php echo $tipocomitente['TipoComitente']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($tipocomitente['TipoComitente']['nombre'], array('controller' => 'tipocomitentes', 'action' => 'view', $tipocomitente['TipoComitente']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $tipocomitente['TipoComitente']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $tipocomitente['TipoComitente']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($tipocomitente); ?>
</table>