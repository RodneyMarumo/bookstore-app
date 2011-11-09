<?php
$this->breadcrumbs=array(
	'Purchase Histories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PurchaseHistory', 'url'=>array('index')),
	array('label'=>'Create PurchaseHistory', 'url'=>array('create')),
	array('label'=>'View PurchaseHistory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PurchaseHistory', 'url'=>array('admin')),
);
?>

<h1>Update PurchaseHistory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>