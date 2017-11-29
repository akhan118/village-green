<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use app\models\Upload;
use yii\web\UploadedFile;
use backend\views\app\photos;

class UploadController extends Controller
{
    public function actionUpload()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->uploads = UploadedFile::getInstance($model, 'uploads');
            if ($model->upload()) {
                // file is uploaded successfully
                return;
            }
        }

        return $this->render('upload', ['model' => $model]);
    }
}
?>