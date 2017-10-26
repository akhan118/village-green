<?php
namespace backend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;


/**
 * Site controller
 */
class SiteController extends Controller
{


    /**
     * Displays Menu Page.
     *
     * @return mixed
     */
    public function actionMenu()
    {
        return $this->render('menu');
    }
}
