<?php
$this->breadcrumbs=array(
	'Conditions'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Books Conditions', 'url'=>array('index')),
	array('label'=>'Create Condition', 'url'=>array('create')),
	array('label'=>'Update Condition', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Condition', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Books Conditions', 'url'=>array('admin')),
);
?>

<h1>View Condition #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
	),
)); ?>
