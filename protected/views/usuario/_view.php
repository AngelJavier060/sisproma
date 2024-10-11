<?php
/** @var UsuarioController $this */
/** @var Usuario $data */
?>
<div class="view">
                    
        <?php if (!empty($data->username)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->username); ?>
            </div>
        </div>

        <?php endif; ?>
                    
        <?php if (!empty($data->tipo)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->tipo); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->nombre_completo)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('nombre_completo')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->nombre_completo); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->direccion)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->direccion); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->telefono)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->telefono); ?>
            </div>
        </div>

        <?php endif; ?>
                
    
    <?php
    /*
        <?php if (!empty($data->estado)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->estado); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->id_referencia)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('id_referencia')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->id_referencia); ?>
            </div>
        </div>

        <?php endif; ?>
    */
    ?>
    
    </div>