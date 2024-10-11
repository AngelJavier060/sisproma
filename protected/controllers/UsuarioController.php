<?php

class UsuarioController extends AweController {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public
            function actionView($id) {
        //PARA RSTRINGIR  EL ACCESO SOLO A LOS ADMINISTRADORES
        if (!Yii::app()->user->isGuest && Usuario::model()->findByPk(Yii::app()->user->id)->esAdministrador()) {


            $this->render('view', array(
                'model' => $this->
                        loadModel($id),
            ));
        } else {
            throw new CHttpException(400, 'No tiene permiso de administrador, para realizar esta acciòn');
        }
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        //PARA RSTRINGIR  EL ACCESO SOLO A LOS ADMINISTRADORES
        if (!Yii::app()->user->isGuest && Usuario::model()->findByPk(Yii::app()->user->id)->esAdministrador()) {

            $model = new Usuario;

            $this->performAjaxValidation($model, 'usuario-form');

            if (isset($_POST['Usuario'])) {
                $model->attributes = $_POST['Usuario'];
                /* Agregado para que la clave se guarde en MD5 */
                $model->password = md5($model->password);
                /**/
                if ($model->save()) {
                    $this->redirect(array('view', 'id' => $model->id));
                }
            }

            $this->render('create', array(
                'model' => $model,
            ));
        } else {
            throw new CHttpException(400, 'No tiene permiso de administrador, para realizar esta acciòn');
        }
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) { //PARA RSTRINGIR  EL ACCESO SOLO A LOS ADMINISTRADORES
        if (!Yii::app()->user->isGuest && Usuario::model()->findByPk(Yii::app()->user->id)->esAdministrador()) {

            $model = $this->loadModel($id);
            
            $this->performAjaxValidation($model, 'usuario-form');
                $clave = $model->password;
            if (isset($_POST['Usuario'])) {
                $model->attributes = $_POST['Usuario'];
                /* Agregado para que la clave se guarde en MD5 */
                if (isset($_POST['Usuario']['password'])  and ($_POST['Usuario']['password']) != '' ) {
                    $model->password = md5($model->password); //Encriptar en MD5
                }
                else
                {
                    $model->password = $clave;
                }
                /**/
                if ($model->save()) {
                    $this->
                            redirect(array('view', 'id' => $model->id));
                }
            }

            $this->render('update', array(
                'model' => $model,
            ));
        } else {
            throw new CHttpException(400, 'No tiene permiso de administrador, para realizar esta acciòn');
        }
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function
    actionDelete($id) {
        if (Yii::app()->request->isPostRequest) {
// we only allow deletion via POST request
            $this->loadModel($id)->delete();

// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] :
                                array
                            ('admin'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Usuario');
        $this->render('index', array
            (
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Usuario('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Usuario']))
            $model->attributes = $_GET['Usuario'];

        $this->render('admin', array(
            'model' => $model,
                )
        );
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exceptio
      n will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id, $modelClass = __CLASS__) {
        $model = Usuario::model()->
                findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model, $form = null) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'usuario-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
