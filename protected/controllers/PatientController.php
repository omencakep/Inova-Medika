<?php

class PatientController extends Controller
{
    public function actionIndex()
    {
     

		$patient = new Patient;
		$patients = $patient->findAll(); // Mengambil semua data pasien dari model Patient

        $this->render('index', ['patients' => $patients]);
    }

    public function actionView($id)
    {

		$patient = new Patient;
        $patient->findByPk($id); // Mengambil data pasien berdasarkan ID

        if ($patient === null) {
            throw new CHttpException(404, 'The requested page does not exist.');
        }

        $this->render('view', ['patient' => $patient]);
    }

    public function actionCreate()
    {
        $model = new Patient;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Patient'])) {
            $model->attributes = $_POST['Patient'];
            if ($model->save()) {
                $this->redirect('index');
            }
        }

        $this->render('create', array(
            'patient' => $model,
        ));
    }

    public function actionUpdate($id)
    {

		$model = new Patient;
        $model->findByPk($id); // Mengambil data pasien berdasarkan ID

        if ($model === null) {
            throw new CHttpException(404, 'The requested page does not exist.');
        }

        if (isset($_POST['Patient'])) {
            $model->attributes = $_POST['Patient'];
            if ($model->save()) {
                $this->redirect('index');
            }
        }

        $this->render('update', ['patient' => $model]);
    }

    public function actionDelete($id)
    {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $model = Patient::model()->findByPk($id);
            if ($model !== null) {
                $model->delete();
				$this->redirect('index');
            }

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax'])) {
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
            }
        } else {
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        }
    }

    // Uncomment the following methods and override them if needed
    // public function filters()
    // {
    //     // return the filter configuration for this controller, e.g.:
    //     return array(
    //         'inlineFilterName',
    //         array(
    //             'class'=>'path.to.FilterClass',
    //             'propertyName'=>'propertyValue',
    //         ),
    //     );
    // }

    // public function actions()
    // {
    //     // return external action classes, e.g.:
    //     return array(
    //         'action1'=>'path.to.ActionClass',
    //         'action2'=>array(
    //             'class'=>'path.to.AnotherActionClass',
    //             'propertyName'=>'propertyValue',
    //         ),
    //     );
    // }
}