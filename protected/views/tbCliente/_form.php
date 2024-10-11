<div class="form">
    <?php
    /** @var TbClienteController $this */
    /** @var TbCliente $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'tb-cliente-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                            <?php echo $form->textFieldRow($model, 'Nombre_Comercial', array('class' => 'span5', 'maxlength' => 75)) ?>
                        <?php echo $form->textFieldRow($model, 'Cliente', array('class' => 'span5', 'maxlength' => 75)) ?>
                        <?php echo $form->textFieldRow($model, 'Telefono', array('class' => 'span5', 'maxlength' => 15)) ?>
                        <?php echo $form->textFieldRow($model, 'Provincia', array('class' => 'span5', 'maxlength' => 50)) ?>
                        <?php echo $form->textFieldRow($model, 'Ciudad', array('class' => 'span5', 'maxlength' => 50)) ?>
                        <?php echo $form->textFieldRow($model, 'Dirección', array('class' => 'span5', 'maxlength' => 75)) ?>
                        <?php echo $form->textFieldRow($model, 'email', array('class' => 'span5', 'maxlength' => 45)) ?>
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