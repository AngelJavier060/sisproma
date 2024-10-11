<div class="form">
    <?php
    /** @var TbSBasicoController $this */
    /** @var TbSBasico $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'tb-sbasico-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                            <?php echo $form->textFieldRow($model, 'Servicio_Basico', array('class' => 'span5', 'maxlength' => 100)) ?>
                        <?php echo $form->textFieldRow($model, 'Capacidad', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'Precio', array('class' => 'span5')) ?>
                        <?php //echo $form->textFieldRow($model, 'Total', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'Descripcion', array('class' => 'span5', 'maxlength' => 200)) ?>
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