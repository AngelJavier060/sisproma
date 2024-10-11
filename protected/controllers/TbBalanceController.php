<?php

class TbBalanceController extends AweController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
    public $layout = '//layouts/column2';

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view', array(
			'model' => $this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model = new TbBalance;
                $model->Malanga_pesada_pP=0; 
                $model->Lavado_y_pelado_pP=0;
                $model->Rebanado_pP=0;
                $model->Freir_pP=0;
                $model->Enfriar_pP=0;
                $model->Condimentar_pP=0;
                $model->Empacar_pP=0;
                $model->Almacenar_pP=0;
        $this->performAjaxValidation($model, 'tb-balance-form');

        if(isset($_POST['TbBalance']))
		{
			$model->attributes = $_POST['TbBalance'];
                        
                        $model->Malanga_pesada_Kg =$model->Capacidad_maquina;                        
                        $model->Malanga_pesada_pKg = 0;
                        
                        $model->Lavado_y_pelado_pKg = (($model->Malanga_pesada_Kg*$model->Lavado_y_pelado_pP)/100);
                        $model->Lavado_y_pelado_Kg = $model->Malanga_pesada_Kg-$model->Lavado_y_pelado_pKg;
                        
                        $model->Rebanado_pKg = (($model->Lavado_y_pelado_Kg*$model->Rebanado_pP)/100);
                        $model->Rebanado_Kg = ($model->Lavado_y_pelado_Kg-$model->Rebanado_pKg);
                        
                        $model->Freir_pKg = (($model->Rebanado_Kg*$model->Freir_pP)/100); 
                        $model->Freir_Kg = ($model->Rebanado_Kg - $model->Freir_pKg);
                        
                        $model->Enfriar_pKg = (($model->Freir_Kg*$model->Enfriar_pP)/100);
                        $model->Enfriar_Kg = ($model->Freir_Kg-$model->Enfriar_pKg);
                        
                        $model->Condimentar_pKg = (($model->Enfriar_Kg*$model->Condimentar_pP)/100);
                        $model->Condimentar_kg = ($model->Enfriar_Kg-$model->Condimentar_pKg);
                        
                        $model->Empacar_pKg = (($model->Condimentar_kg*$model->Empacar_pP)/100);
                        $model->Empacar_Kg = ($model->Condimentar_kg-$model->Empacar_pKg);
                        
                        $model->Almacenar_pKg = (($model->Empacar_Kg*$model->Almacenar_pP)/100);
                        $model->Almacenar_Kg = ($model->Empacar_Kg - $model->Almacenar_pKg);
                        
   //                         $model->Total_Kg = $model->Malanga_pesada_Kg+
//                                           $model->Lavado_y_pelado_Kg+
//                                           $model->Rebanado_Kg+
//                                           $model->Freir_Kg+ 
//                                           $model->Enfriar_Kg+
//                                           $model->Condimentar_kg+
//                                           $model->Empacar_Kg+
//                                           $model->Almacenar_Kg;
                         $model->Total_Kg =$model->Almacenar_Kg*$model->Paradas;
                         $model->Total_pP = $model->Malanga_pesada_pP+
                                           $model->Lavado_y_pelado_pP+
                                           $model->Rebanado_pP+
                                           $model->Freir_pP+
                                           $model->Enfriar_pP+
                                           $model->Condimentar_pP+
                                           $model->Empacar_pP+
                                           $model->Almacenar_pP;
                         $model->Total_pKg = $model->Malanga_pesada_pKg+
                                           $model->Lavado_y_pelado_pKg+
                                           $model->Rebanado_pKg+
                                           $model->Freir_pKg+
                                           $model->Enfriar_pKg+
                                           $model->Condimentar_pKg+
                                           $model->Empacar_pKg+
                                           $model->Almacenar_pKg;
			if($model->save()) {
                $this->redirect(array('view', 'id' => $model->id_Balance));
            }
		}

		$this->render('create',array(
			'model' => $model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model = $this->loadModel($id);

        $this->performAjaxValidation($model, 'tb-balance-form');

		if(isset($_POST['TbBalance']))
		{
			$model->attributes = $_POST['TbBalance'];
                         $model->Malanga_pesada_Kg =$model->Capacidad_maquina;   
                              $model->Malanga_pesada_pKg = 0;
                        
                        $model->Lavado_y_pelado_pKg = (($model->Malanga_pesada_Kg*$model->Lavado_y_pelado_pP)/100);
                        $model->Lavado_y_pelado_Kg = $model->Malanga_pesada_Kg-$model->Lavado_y_pelado_pKg;
                        
                        $model->Rebanado_pKg = (($model->Lavado_y_pelado_Kg*$model->Rebanado_pP)/100);
                        $model->Rebanado_Kg = ($model->Lavado_y_pelado_Kg-$model->Rebanado_pKg);
                        
                        $model->Freir_pKg = (($model->Rebanado_Kg*$model->Freir_pP)/100); 
                        $model->Freir_Kg = ($model->Rebanado_Kg - $model->Freir_pKg);
                        
                        $model->Enfriar_pKg = (($model->Freir_Kg*$model->Enfriar_pP)/100);
                        $model->Enfriar_Kg = ($model->Freir_Kg-$model->Enfriar_pKg);
                        
                        $model->Condimentar_pKg = (($model->Enfriar_Kg*$model->Condimentar_pP)/100);
                        $model->Condimentar_kg = ($model->Enfriar_Kg-$model->Condimentar_pKg);
                        
                        $model->Empacar_pKg = (($model->Condimentar_kg*$model->Empacar_pP)/100);
                        $model->Empacar_Kg = ($model->Condimentar_kg-$model->Empacar_pKg);
                        
                        $model->Almacenar_pKg = (($model->Empacar_Kg*$model->Almacenar_pP)/100);
                        $model->Almacenar_Kg = ($model->Empacar_Kg - $model->Almacenar_pKg);
                        
//                         $model->Total_Kg = $model->Malanga_pesada_Kg+
//                                           $model->Lavado_y_pelado_Kg+
//                                           $model->Rebanado_Kg+
//                                           $model->Freir_Kg+ 
//                                           $model->Enfriar_Kg+
//                                           $model->Condimentar_kg+
//                                           $model->Empacar_Kg+
//                                           $model->Almacenar_Kg;
                         $model->Total_Kg =$model->Almacenar_Kg*$model->Paradas;
                         $model->Total_pP = $model->Malanga_pesada_pP+
                                           $model->Lavado_y_pelado_pP+
                                           $model->Rebanado_pP+
                                           $model->Freir_pP+
                                           $model->Enfriar_pP+
                                           $model->Condimentar_pP+
                                           $model->Empacar_pP+
                                           $model->Almacenar_pP;
                         $model->Total_pKg = $model->Malanga_pesada_pKg+
                                           $model->Lavado_y_pelado_pKg+
                                           $model->Rebanado_pKg+
                                           $model->Freir_pKg+
                                           $model->Enfriar_pKg+
                                           $model->Condimentar_pKg+
                                           $model->Empacar_pKg+
                                           $model->Almacenar_pKg; 
                        
			if($model->save()) {
				$this->redirect(array('view','id' => $model->id_Balance));
            }
		}

		$this->render('update',array(
			'model' => $model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('TbBalance');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model = new TbBalance('search');
		$model->unsetAttributes(); // clear any default values
		if(isset($_GET['TbBalance']))
			$model->attributes = $_GET['TbBalance'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id, $modelClass=__CLASS__)
	{
		$model = TbBalance::model()->findByPk($id);
		if($model === null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model, $form=null)
	{
		if(isset($_POST['ajax']) && $_POST['ajax'] === 'tb-balance-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
