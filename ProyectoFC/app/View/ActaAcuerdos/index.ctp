<!-- File: /app/View/ActaAcuerdos/index.ctp -->
<h1>Acta Acuerdo</h1>
<table>
	<?php echo $this->Html->link('Agregar Acta Acuerdo', array('controller' => 'actaacuerdos', 'action' => 'add')); ?>
	<tr>
		<th>Id</th>
		<th>VER 1</th>
		<th>VER 2</th>
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($actaacuerdos as $actaacuerdo): ?>
	<tr>
		<td><?php echo $actaacuerdo['ActaAcuerdo']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($actaacuerdo['ActaAcuerdo']['id'], array('controller' => 'actaacuerdos', 'action' => 'view', $actaacuerdo['ActaAcuerdo']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $actaacuerdo['ActaAcuerdo']['id']),
                array('confirm' => 'Está seguro de que desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $actaacuerdo['ActaAcuerdo']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($actaacuerdo); ?>
</table>