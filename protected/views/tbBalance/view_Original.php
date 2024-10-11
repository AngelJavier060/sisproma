<?php
/** @var TbBalanceController $this */
/** @var TbBalance $model */
$this->breadcrumbs=array(
	'Tb Balances'=>array('index'),
	$model->id_Balance,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TbBalance::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TbBalance::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id_Balance)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_Balance), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . TbBalance::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id_Balance',
        'Producto',
        'Capacidad_maquina',
        'Paradas',
        'Dias_al_mes',
        'Malanga_pesada_Kg',
        'Malanga_pesada_pP',
        'Malanga_pesada_pKg',
        'Lavado_y_pelado_Kg',
        'Lavado_y_pelado_pP',
        'Lavado_y_pelado_pKg',
        'Rebanado_Kg',
        'Rebanado_pP',
        'Rebanado_pKg',
        'Freir_Kg',
        'Freir_pP',
        'Freir_pKg',
        'Enfriar_Kg',
        'Enfriar_pP',
        'Enfriar_pKg',
        'Condimentar_kg',
        'Condimentar_pP',
        'Condimentar_pKg',
        'Empacar_Kg',
        'Empacar_pP',
        'Empacar_pKg',
        'Almacenar_Kg',
        'Almacenar_pP',
        'Total_Kg',
        'Total_pP',
        'Total_pKg',
	),
)); ?>
</fieldset>