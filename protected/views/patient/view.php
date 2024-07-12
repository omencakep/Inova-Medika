<?php
$this->breadcrumbs=array(
    'Patients'=>array('index'),
    $patient->name,
);
?>

<h1>View Patient #<?php echo $patient->id; ?></h1>

<p>
    <?php echo CHtml::link('Update', array('update', 'id'=>$patient->id)); ?> |
    <?php echo CHtml::link('Delete', array('delete', 'id'=>$patient->id), array('confirm'=>'Are you sure?')); ?>
</p>

<table class="table table-striped table-bordered detail-view">
    <tr>
        <th>ID</th>
        <td><?php echo $patient->id; ?></td>
    </tr>
    <tr>
        <th>Name</th>
        <td><?php echo CHtml::encode($patient->name); ?></td>
    </tr>
    <tr>
        <th>Age</th>
        <td><?php echo CHtml::encode($patient->age); ?></td>
    </tr>
    <tr>
        <th>Address</th>
        <td><?php echo CHtml::encode($patient->address); ?></td>
    </tr>
    <!-- Tambahkan kolom lainnya sesuai dengan kebutuhan -->
</table>
