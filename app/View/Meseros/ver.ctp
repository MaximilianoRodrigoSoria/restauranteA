<h2>Detalle de meser@ <?php echo $mesero['Mesero']['nombre'];?>
</h2>

	<?php echo $this->Html->link('Editar',array('controller'=>'meseros','action'=>'editar', $mesero['Mesero']['id'])); ?>

<br>
<br>


<p><stong>DNI: </stong><?php echo $mesero ['Mesero']['dni']; ?></p>
<p><stong>Telefono: </stong><?php echo $mesero ['Mesero']['telefono']; ?></p>
<p><stong>Creado: </stong><?php echo $mesero ['Mesero']['created']; ?></p>
<p><stong>Modificado: </stong><?php echo $mesero ['Mesero']['modified']; ?></p>
<br>
<?php echo $this->Html->link('Volver',array('controller'=>'meseros','action'=>'index')); ?>
