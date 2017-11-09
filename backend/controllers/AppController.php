<?php
namespace backend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\MenuForm;
use backend\models\PagesForm;
use backend\models\SubMenuForm;
use backend\views\app\Submenu;
/**
 * Site controller
 */
class AppController extends Controller
{
    /**
     * @inheritdoc
     */


     public $layout = 'app';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup','index'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('app');

    }


/**
    * Displays menu.
    *
    * @return mixed
    */
   public function actionMenu()

   {
            $model = new MenuForm;
          if($model->load(Yii::$app->request->post()) && $model->validate())
          {
              // var_dump($model);
               //echo "True SaveMenu";
                $model->SaveMenu();


          }else {
          return $this->render('menu', ['model'=>$model,]);
        }

   }

        /**
         * Displays Submenu.
         *
         * @return mixed
         */
        public function actionSubmenu()
        {
          $model = new SubMenuForm;
          if($model->load(Yii::$app->request->post()) && $model->validate())
          {

          }else {
          return $this->render('submenu', ['model'=>$model,]);

}
        }

        /**
         * Displays Pages.
         *
         * @return mixed
         */
        public function actionPages()
        {

          $model = new pagesForm;
          if($model->load(Yii::$app->request->post()) && $model->validate())
          {
            //var_dump($model);
            //echo "True SaveMenu";
            $model->SavePages();

          }else {
          return $this->render('pages', ['model'=>$model,]);

          }

        }

public function actionEntry()
{
$article= new MenuForm;
$article->menu_name = "Home";
$article->menu_submenu_true=1;
$article->menu_order= '1';
$article->insert();
}

}
