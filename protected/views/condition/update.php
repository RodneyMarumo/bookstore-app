<?php
$this->breadcrumbs=array(
	'Conditions'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Books Conditions', 'url'=>array('index')),
	array('label'=>'Create Condition', 'url'=>array('create')),
	array('label'=>'View Condition', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Books Conditions', 'url'=>array('admin')),
);
?>

<h1>Update Condition <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>