<?php

class TbConsumoEnergiaController extends AweController
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
		$model = new TbConsumoEnergia;

        $this->performAjaxValidation($model, 'tb-consumo-energia-form');

        if(isset($_POST['TbConsumoEnergia']))
		{
			$model->attributes = $_POST['TbConsumoEnergia'];
//                             
//                             LOS CALCULOS SE PASARON AL TRIGGER
//                             $dias_lab=$model->idBalance->Dias_al_mes; 
//                             $paradas=$model->idBalance->Paradas;
//                       $model->Total = $model->Kv_por_Hora*$dias_lab*$paradas;
			if($model->save()) {
                $this->redirect(array('view', 'id' => $model->id_Consumo_Energia));
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

        $this->performAjaxValidation($model, 'tb-consumo-energia-form');

		if(isset($_POST['TbConsumoEnergia']))
		{
			$model->attributes = $_POST['TbConsumoEnergia'];
                          $dias_lab=$model->idBalance->Dias_al_mes;
                          $paradas=$model->idBalance->Paradas;
                        $model->Total = $model->Kv_por_Hora*$dias_lab*$paradas;
			if($model->save()) {
				$this->redirect(array('view','id' => $model->id_Consumo_Energia));
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
		$dataProvider=new CActiveDataProvider('TbConsumoEnergia');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model = new TbConsumoEnergia('search');
		$model->unsetAttributes(); // clear any default values
		if(isset($_GET['TbConsumoEnergia']))
			$model->attributes = $_GET['TbConsumoEnergia'];

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
		$model = TbConsumoEnergia::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax'] === 'tb-consumo-energia-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
