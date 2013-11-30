<!-- File: /app/View/Plans/index.ctp -->
<h1>Plans</h1>
<table>
	<?php echo $this->Html->link('Agregar Plan', array('controller' => 'plans', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Fecha Inicio</th>
		<th>Fecha Fin</th>
		<th>Presupuesto</th>
		<th>Proyecto</th>
		<th>Acciones</th>
	</tr>

	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($plans as $plan): ?>
	<tr>
		<td><?php echo $plan['Plan']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($plan['Plan']['fecha_ini_prob'], array('controller' => 'plans', 'action' => 'view', $plan['Plan']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($plan['Plan']['fecha_fin_prob'], array('controller' => 'plans', 'action' => 'view', $plan['Plan']['id'])); ?>
		</td>

		<td>
		<?php echo $this->Html->link($plan['Plan']['presupuesto_planif'], array('controller' => 'plans', 'action' => 'view', $plan['Plan']['id'])); ?>
		</td>

		<td>
		<?php echo $this->Html->link($plan['Plan']['proyecto_id'], array('controller' => 'plans', 'action' => 'view', $plan['Plan']['id'])); ?>
		</td>
		<td>
		
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $plan['Plan']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $plan['Plan']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($plan); ?>
</table>
