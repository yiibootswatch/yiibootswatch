<?php

class PageController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Post;
        $model1 = new Page;
        $model2 = new Assets;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        if (isset($_POST['Post']) && isset($_POST['Page'])) {
            $model->attributes = $_POST['Post'];
            $model1->attributes = $_POST['Page'];
            $valid = $model->validate();
            $valid = $model1->validate() && $valid;
            if ($valid) {         
                $model1->save();
                $model->page_id = $model1->id;
                $model->save();
                $assets = CUploadedFile::getInstancesByName('attachment');
                // proceed if the images have been set
                if (isset($assets) && count($assets) > 0) {
                    // go through each uploaded image
                    foreach ($assets as $files => $obj) {
                        $filename = strtotime(date('Y-m-d H:i:s')).Yii::app()->user->id.$obj->name; 
                        if ($obj->saveAs(Yii::getPathOfAlias('webroot') . Yii::app()->params['mediapath'] . $filename)) {
                            // add it to the main model now
                            $addAsset = new Assets();
                            $addAsset->filename = $filename;
                            $addAsset->post_id = $model->id;
                            $addAsset->page_id = $model1->id;
                            $addAsset->save(); // DONE
                        }
                    }
                }                
                //$this->redirect(array('create', 'id' => $model->id));
            }
        }

        $this->render('create', array(
            'model' => $model,
            'model1' => $model1,
            'model2' => $model2,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) { 
        $model = Post::model()->findByAttributes(array('page_id'=>$id));
        if($model==NULL) {
            $model = new Post;
        }
        $model1 = $this->loadModel($id);        
        $model2 = new Assets;        
        
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        if (isset($_POST['Post']) && isset($_POST['Page'])) {
            $model->attributes = $_POST['Post'];
            $model1->attributes = $_POST['Page'];
            $valid = $model->validate();
            $valid = $model1->validate() && $valid;
            if ($valid) {         
                $model1->save();                
                $model->save();
                $assets = CUploadedFile::getInstancesByName('attachment');
                // proceed if the images have been set
                if (isset($assets) && count($assets) > 0) {
                    // go through each uploaded image
                    foreach ($assets as $files => $obj) {
                        $filename = strtotime(date('Y-m-d H:i:s')).Yii::app()->user->id.$obj->name; 
                        if ($obj->saveAs(Yii::getPathOfAlias('webroot') . Yii::app()->params['mediapath'] . $filename)) {
                            // add it to the main model now
                            $addAsset = new Assets();
                            $addAsset->filename = $filename;
                            $addAsset->post_id = $model->id;
                            $addAsset->page_id = $model1->id;
                            $addAsset->save(); // DONE
                        }
                    }
                }                
                //$this->redirect(array('create', 'id' => $model->id));
            }
        }        

        $this->render('update', array(
            'model' => $model,
            'model1' => $model1,
            'model2' => $model2,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Page');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Page('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Page']))
            $model->attributes = $_GET['Page'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Page the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Page::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }        
        
    /**
     * Performs the AJAX validation.
     * @param Page $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'page-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
