<?php

class TbPersonalController extends AweController
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
		$model = new TbPersonal;

        $this->performAjaxValidation($model, 'tb-personal-form');

        if(isset($_POST['TbPersonal']))
		{
			$model->attributes = $_POST['TbPersonal'];
                      
                        $model->Sueldo_Nominal=$model->Numero_Empleados*$model->Sueldo_Basico;
                        $model->HE_Total=(($model->HE_50*1.5)+($model->HE_100*2));
                        if($model->HE_Total<=0 or $model->HE_Total==null)
                            { $model->HE_Total=0;  }
                        else
                            { $model->Valor_HE = (($model->Sueldo_Nominal/$model->Dias_laborados)/(8 * $model->HE_Total)); };                        
                        $model->Provisiones_XIII=$model->Sueldo_Nominal*8.33/100;
                        $model->Provisiones_XIV=$model->Sueldo_Nominal*8.33/100;
                        $model->Fondo_Reserva=$model->Sueldo_Nominal*8.33/100;
                        $model->Total_Ingresos=$model->Sueldo_Nominal+$model->Fondo_Reserva;
                        $model->Aporte_IESS=$model->Sueldo_Nominal*11.15/100;
                        $model->Total_Egresos=$model->Aporte_IESS;
                        $model->Pago_Total_Mensual=$model->Total_Ingresos-$model->Total_Egresos;
                        $model->Pago_Anual=$model->Pago_Total_Mensual*12;
                        
			if($model->save()) {
                $this->redirect(array('view', 'id' => $model->id_Personal));
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

        $this->performAjaxValidation($model, 'tb-personal-form');

		if(isset($_POST['TbPersonal']))
		{
			$model->attributes = $_POST['TbPersonal'];
                         $model->Sueldo_Nominal=$model->Numero_Empleados*$model->Sueldo_Basico;
                        $model->HE_Total=(($model->HE_50*1.5)+($model->HE_100*2));
                        if($model->HE_Total<=0 or $model->HE_Total==null)
                            { $model->HE_Total=0;  }
                        else
                            { $model->Valor_HE = (($model->Sueldo_Nominal/$model->Dias_laborados)/(8 * $model->HE_Total)); };                        
                        $model->Provisiones_XIII=$model->Sueldo_Nominal*8.33/100;
                        $model->Provisiones_XIV=$model->Sueldo_Nominal*8.33/100;
                       $model->Fondo_Reserva=$model->Sueldo_Nominal*8.33/100;
                        $model->Total_Ingresos=$model->Sueldo_Nominal+$model->Fondo_Reserva;
                        $model->Aporte_IESS=$model->Sueldo_Nominal*11.15/100;
                        $model->Total_Egresos=$model->Aporte_IESS;
                        $model->Pago_Total_Mensual=$model->Total_Ingresos-$model->Total_Egresos;
                        $model->Pago_Anual=$model->Pago_Total_Mensual*12;
			if($model->save()) {
				$this->redirect(array('view','id' => $model->id_Personal));
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
		$dataProvider=new CActiveDataProvider('TbPersonal');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model = new TbPersonal('search');
		$model->unsetAttributes(); // clear any default values
		if(isset($_GET['TbPersonal']))
			$model->attributes = $_GET['TbPersonal'];

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
		$model = TbPersonal::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax'] === 'tb-personal-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
