<?php
$this->breadcrumbs=array(
	'Purchase Histories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PurchaseHistory', 'url'=>array('index')),
	array('label'=>'Create PurchaseHistory', 'url'=>array('create')),
	array('label'=>'Update PurchaseHistory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PurchaseHistory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PurchaseHistory', 'url'=>array('admin')),
);
?>

<h1>View PurchaseHistory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'customerId',
		'bookId',
		'sellerId',
		'quantity',
		'price',
	),
)); ?>
