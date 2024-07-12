<?php
$this->breadcrumbs=array(
    'Tindakan',
);
?>

<h1>Tindakan</h1>

<p>
    <?php echo CHtml::link('Buat Tindakan', array('create'), array('class'=>'btn btn-primary')); ?>
</p>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nama Pasien</th>
        <th>Keluhan</th>
        <th>Diagnosa</th>
        <th>Tindakan</th>
    </tr>
    <?php foreach($tindakan as $tin): ?>
        <tr>
            <td><?php echo $tin->id; ?></td>
            <td><?php echo CHtml::encode($tin->nama_pasien); ?></td>
            <td><?php echo CHtml::encode($tin->keluhan); ?></td>
            <td><?php echo CHtml::encode($tin->diagnosa); ?></td>
            <td><?php echo CHtml::encode($tin->tindakan); ?></td>
            <td>
                <?php echo CHtml::link('View', array('view', 'id'=>$tin->id)); ?> |
                <?php echo CHtml::link('Update', array('update', 'id'=>$tin->id)); ?> |
                <?php echo CHtml::link('Delete', array('delete', 'id'=>$tin->id), array('confirm'=>'Are you sure?')); ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
