<?php

class TindakanController extends Controller
{
    public function actionIndex()
    {
		$tindakan = new Tindakan;
		$model = $tindakan->findAll(); // Mengambil semua data pasien dari model Tindakan

        $this->render('index', ['tindakan' => $model]);
    }

    public function actionCreate()
    {
        $model = new Tindakan;

        if (isset($_POST['Tindakan'])) {
            $model->attributes = $_POST['Tindakan'];
            if ($model->save()) {
                $this->redirect('index');
            }
        }

        $this->render('create', ['model' => $model]);
    }

    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);

        if (isset($_POST['Tindakan'])) {
            $model->attributes = $_POST['Tindakan'];
            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionView($id)
    {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    public function actionDelete($id)
    {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax'])) {
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
            }
        } else {
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        }
    }

    public function actionAdmin()
    {
        $model = new Tindakan('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Tindakan'])) {
            $model->attributes = $_GET['Tindakan'];
        }
        $this->render('admin', array(
            'model' => $model,
        ));
    }

    public function loadModel($id)
    {
        $model = Tindakan::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $model;
    }
}
