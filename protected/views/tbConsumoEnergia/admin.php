<?php
/** @var TbConsumoEnergiaController $this */
/** @var TbConsumoEnergia $model */
$this->breadcrumbs=array(
	'Tb Consumo Energias'=>array('index'),
	Yii::t('AweCrud.app', 'Manage'),
);

$this->menu=array(
	array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TbConsumoEnergia::label(2), 'icon' => 'list', 'url' => array('index')),
	array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TbConsumoEnergia::label(), 'icon' => 'plus', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tb-consumo-energia-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo TbConsumoEnergia::label(2) ?>    </legend>

<?php //echo CHtml::link('<i class="icon-search"></i> ' . Yii::t('AweCrud.app', 'Advanced Search'), '#', array('class' => 'search-button btn')) ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id' => 'tb-consumo-energia-grid',
    'type' => 'striped condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id_Consumo_Energia',
        array(
                    'name' => 'id_Balance',
                    'value' => 'isset($data->idBalance) ? $data->idBalance : null',
                    'filter' => CHtml::listData(TbBalance::model()->findAll(), 'id_Balance', TbBalance::representingColumn()),
                ),
        'Cantidad',
        'Detalle',
        'Kv_por_Hora',
        //'Total',
        array(
        'name'=>'Total',
        'footer'=>"Total: ".$model->TotalTotal($model->search()->getData()),
                ),
        
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
</fieldset>