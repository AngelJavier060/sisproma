<?php
/** @var TbBalanceController $this */
/** @var TbBalance $data */
?>
<div class="view">
                    
        <?php if (!empty($data->Producto)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Producto')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Producto); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Capacidad_maquina)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Capacidad_maquina')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Capacidad_maquina); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Paradas)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Paradas')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Paradas); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Dias_al_mes)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Dias_al_mes')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Dias_al_mes); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Malanga_pesada_Kg)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Malanga_pesada_Kg')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Malanga_pesada_Kg); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Malanga_pesada_pP)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Malanga_pesada_pP')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Malanga_pesada_pP); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Malanga_pesada_pKg)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Malanga_pesada_pKg')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Malanga_pesada_pKg); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Lavado_y_pelado_Kg)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Lavado_y_pelado_Kg')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Lavado_y_pelado_Kg); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Lavado_y_pelado_pP)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Lavado_y_pelado_pP')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Lavado_y_pelado_pP); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Lavado_y_pelado_pKg)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Lavado_y_pelado_pKg')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Lavado_y_pelado_pKg); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Rebanado_Kg)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Rebanado_Kg')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Rebanado_Kg); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Rebanado_pP)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Rebanado_pP')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Rebanado_pP); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Rebanado_pKg)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Rebanado_pKg')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Rebanado_pKg); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Freir_Kg)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Freir_Kg')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Freir_Kg); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Freir_pP)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Freir_pP')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Freir_pP); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Freir_pKg)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Freir_pKg')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Freir_pKg); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Enfriar_Kg)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Enfriar_Kg')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Enfriar_Kg); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Enfriar_pP)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Enfriar_pP')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Enfriar_pP); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Enfriar_pKg)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Enfriar_pKg')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Enfriar_pKg); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Condimentar_kg)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Condimentar_kg')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Condimentar_kg); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Condimentar_pP)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Condimentar_pP')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Condimentar_pP); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Condimentar_pKg)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Condimentar_pKg')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Condimentar_pKg); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Empacar_Kg)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Empacar_Kg')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Empacar_Kg); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Empacar_pP)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Empacar_pP')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Empacar_pP); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Empacar_pKg)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Empacar_pKg')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Empacar_pKg); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Almacenar_Kg)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Almacenar_Kg')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Almacenar_Kg); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Almacenar_pP)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Almacenar_pP')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Almacenar_pP); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Total_Kg)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Total_Kg')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Total_Kg); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Total_pP)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Total_pP')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Total_pP); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Total_pKg)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Total_pKg')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Total_pKg); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>