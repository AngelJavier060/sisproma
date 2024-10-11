<div class="form">
    <?php
    /** @var UsuarioController $this */
    /** @var Usuario $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
        'id' => 'usuario-form',
        'enableAjaxValidation' => true,
        'enableClientValidation' => false,
    ));
    ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

    <?php echo $form->textFieldRow($model, 'username', array('class' => 'span5', 'placeholder'=>"Nombre para ingresar al sistema", 'maxlength' => 50)) ?>
    <?php
//   LABEL
//   echo '<br>';
//    $this->widget('bootstrap.widgets.TbLabel', array(
//        'type' => 'info', // 'success', 'warning', 'important', 'info' or 'inverse'
//        'label' => 'Ingresar password solo si requiere cambiar la clave, caso contrario conserva la misma.',
//    ));
    ?>    
    <?php echo $form->passwordFieldRow($model, 'password', array('class' => 'span5','placeholder'=>"Al modificar el usuario ingresar solo si necesita cambiar la clave.", 'value' => '', 'maxlength' => 100)) ?>
    <?php echo $form->dropDownListRow($model, 'tipo', array('Administrador' => 'Administrador', 'Estudiante' => 'Estudiante'), array('class' => 'span5', 'maxlength' => 20)) ?>
    <?php echo $form->textFieldRow($model, 'nombre_completo', array('class' => 'span5', 'maxlength' => 30)) ?>
    <?php echo $form->textFieldRow($model, 'direccion', array('class' => 'span5', 'maxlength' => 100)) ?>
    <?php echo $form->textFieldRow($model, 'telefono', array('class' => 'span5', 'maxlength' => 30)) ?>
        <?php echo $form->dropDownListRow($model, 'estado', array('1' => 'Activo', '2' => 'Inactivo'), array('class' => 'span5')) ?>
        <?php // echo $form->textFieldRow($model, 'id_referencia', array('class' => 'span5')) ?>
    <div class="form-actions">
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'label' => $model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
        ));
        ?>
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            //'buttonType'=>'submit',
            'label' => Yii::t('AweCrud.app', 'Cancel'),
            'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
        ));
        ?>
    </div>

<?php $this->endWidget(); ?>
</div>