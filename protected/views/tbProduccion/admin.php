<?php
/** @var TbProduccionController $this */
/** @var TbProduccion $model */
$this->breadcrumbs=array(
	'Tb Produccions'=>array('index'),
	Yii::t('AweCrud.app', 'Manage'),
);

$this->menu=array(
	array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TbProduccion::label(2), 'icon' => 'list', 'url' => array('index')),
	array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TbProduccion::label(), 'icon' => 'plus', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tb-produccion-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<br><br><br>
<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo TbProduccion::label(2) ?>    </legend>
<br>
<?php //echo CHtml::link('<i class="icon-search"></i> ' . Yii::t('AweCrud.app', 'Advanced Search'), '#', array('class' => 'search-button btn')) ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id' => 'tb-produccion-grid',
    'type' => 'striped condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id_Produccion',
        array(
                    'name' => 'id_Balance',
                    'value' => 'isset($data->idBalance) ? $data->idBalance : null',
                    'filter' => CHtml::listData(TbBalance::model()->findAll(), 'id_Balance', TbBalance::representingColumn()),
                ),
        'Producto',
         'Porcentaje',
        'Kg',
        'gr_funda',
        'Valor_unitario',
        
        'Unidades_dia',
        
        'Valor_Total_dia',
        'Unidades_mes',
        'Valor_Total_mes',
        'Unidades_anio',
        'Valor_Total_anio',
        
        'Stock',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
</fieldset>