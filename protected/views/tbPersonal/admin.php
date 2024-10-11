<?php
/** @var TbPersonalController $this */
/** @var TbPersonal $model */
$this->breadcrumbs=array(
	'Tb Personals'=>array('index'),
	Yii::t('AweCrud.app', 'Manage'),
);

$this->menu=array(
	array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TbPersonal::label(2), 'icon' => 'list', 'url' => array('index')),
	array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TbPersonal::label(), 'icon' => 'plus', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tb-personal-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<br><br><br>
<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo TbPersonal::label(2) ?>    </legend>
<br>
<?php //echo CHtml::link('<i class="icon-search"></i> ' . Yii::t('AweCrud.app', 'Advanced Search'), '#', array('class' => 'search-button btn')) ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id' => 'tb-personal-grid',
    'type' => 'striped condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id_Personal',
        'Cargo',
        'Numero_Empleados',
        'Dias_laborados',
        'Sueldo_Basico',
        'Sueldo_Nominal',
        
        'HE_50',
        'HE_100',
        'HE_Total',
        'Valor_HE',
        'Provisiones_XIII',
        //'Provisiones_XIV',
        'Total_Ingresos',
        'Aporte_IESS',
        'Total_Egresos',
        'Pago_Total_Mensual',
        'Pago_Anual',
        
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
</fieldset>