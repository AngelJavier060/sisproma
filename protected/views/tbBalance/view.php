<?php
/** @var TbBalanceController $this */
/** @var TbBalance $model */
$this->breadcrumbs=array(
	'Tb Balances'=>array('index'),
	$model->id_Balance,
); 
$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TbBalance::label(2), 'icon' => 'list', 'url' => array('index')),
	//array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TbBalance::label(), 'icon' => 'plus', 'url' => array('create')),
	//array('label' => Yii::t('AweCrud.app', 'View'), 'icon' => 'eye-open', 'url'=>array('view', 'id' => $model->id_Balance)),
    array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'trash', 'url'=>'#', 'linkOptions' => array('submit' => array('update', 'id' => $model->id_Balance))),
//	array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);

?>

<fieldset>
    <legend><?php echo  TbBalance::label().' para la producción de '; ?> <?php echo CHtml::encode($model) ?></legend>

    <br><b>Capacidad de maquina:</b>  <?php echo $model->Capacidad_maquina; ?>
    <br><b>Paradas:</b> <?php echo $model->Paradas; ?>
    <br><b>Dias al mes:</b> <?php echo $model->Dias_al_mes; ?>
    <div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th> 
                <th>Balance de producción</th>
                <th>Kg</th>
                <th>% perdido</th>
                <th>Kg Perdidos</th>
            </tr>
        </thead>        
            <tbody>
                <tr>
                    <td><b>1</b></td>
                    <td>
                        Malanga Pesada
                    </td>
                    <td>
                         <?php echo $model->Malanga_pesada_Kg; ?>
                     </td>
                    <td>
                         <?php echo $model->Malanga_pesada_pP; ?>
                      
                    </td>
                    <td>
                          <?php echo $model->Malanga_pesada_pKg; ?>
                      
                    </td>
                </tr>
                 <tr>
                    <td><b>2</b></td>
                    <td>
                        Lavado y Pelada
                    </td>
                    <td>
                          <?php echo $model->Lavado_y_pelado_Kg; ?>
                      
                    </td>
                    <td>
                          <?php echo $model->Lavado_y_pelado_pP; ?>
                      
                    </td>
                    <td>
                          <?php echo $model->Lavado_y_pelado_pKg; ?>
                      
                    </td>
                </tr>
                 <tr>
                    <td><b>3</b></td>
                    <td>
                        Rebanado
                    </td>
                    <td>
                          <?php echo $model->Rebanado_Kg; ?>
                      
                    </td>
                    <td>
                          <?php echo $model->Rebanado_pP; ?>
                     
                    </td>
                    <td>
                           <?php echo $model->Rebanado_pKg; ?>
                      
                    </td>
                </tr>
                 <tr>
                    <td><b>4</b></td>
                    <td>
                        Freír
                    </td>
                    <td>
                          <?php echo $model->Freir_Kg; ?>
                      
                    </td>
                    <td>
                          <?php echo $model->Freir_pP; ?>
                       
                    </td>
                    <td>
                         <?php echo $model->Freir_pKg; ?>
                      
                    </td>
                </tr>
                 <tr>
                    <td><b>5</b></td>
                    <td>
                        Enfriar
                    </td>
                    <td>
                          <?php echo $model->Enfriar_Kg; ?>
                      
                    </td>
                    <td>
                          <?php echo $model->Enfriar_pP; ?>
                       
                    </td>
                    <td>
                         <?php echo $model->Enfriar_pKg; ?>
                       
                    </td>
                </tr>
                 <tr>
                    <td><b>6</b></td>
                    <td>
                        Añadir Condimentos
                    </td>
                    <td>
                         <?php echo $model->Condimentar_kg; ?>
                       
                    </td>
                    <td>
                         <?php echo $model->Condimentar_pP; ?>
                       
                    </td>
                    <td>
                         <?php echo $model->Condimentar_pKg; ?>
                       
                    </td>
                </tr>
                 <tr>
                    <td><b>7</b></td>
                    <td>
                        Empacar
                    </td>
                    <td>
                         <?php echo   $model->Empacar_Kg; ?>
                      
                    </td>
                    <td>
                          <?php echo $model->Empacar_pP; ?>
                       
                    </td>
                    <td>
                         <?php echo $model->Empacar_pKg; ?>
                       
                    </td>
                </tr>
                 <tr>
                    <td><b>8</b></td>
                    <td>
                        Almacenar
                    </td>
                    <td>
                         <?php echo $model->Almacenar_Kg; ?>
                      
                    </td>
                    <td>
                          <?php echo $model->Almacenar_pP; ?>
                       
                    </td>
                    <td>
                         <?php echo $model->Almacenar_pKg; ?>
                      
                    </td>
                </tr>
                 <tr>
                     <td colspan ="2"><b>TOTAL</b></td>
                    
                    <td>
                             <?php echo $model->Total_Kg; ?>
                   
                    </td>
                    <td>
                             <?php echo $model->Total_pP; ?>
                   
                    </td>
                    <td>
                             <?php echo $model->Total_pKg; ?>
                   
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</fieldset>