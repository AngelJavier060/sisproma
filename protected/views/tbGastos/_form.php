<div class="form">
    <?php
    /** @var TbGastosController $this */
    /** @var TbGastos $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'tb-gastos-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                            <?php echo $form->textFieldRow($model, 'Gasto', array('class' => 'span5', 'maxlength' => 45)) ?>
                        <?php echo $form->textFieldRow($model, 'Al_mes', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'Cantidad_meses', array('class' => 'span5')) ?>
                        <?php //echo $form->textFieldRow($model, 'Total', array('class' => 'span5')) ?>
                <div class="form-actions"> 
                <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
		)); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array(
			//'buttonType'=>'submit',
			'label'=> Yii::t('AweCrud.app', 'Cancel'),
			'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
		)); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>