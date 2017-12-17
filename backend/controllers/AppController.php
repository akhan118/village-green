<?php
namespace backend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\MenuForm;
use backend\models\PagesForm;
use backend\models\SubMenuForm;
use backend\models\UploadEntry;
use backend\views\app\Submenu;
use backend\views\app\photosView;
use backend\models\UploadForm;
use backend\models\Submenus;


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
                $model = new MenuForm;
                return $this->render('menu', ['model'=>$model,]);


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
          if($model->load(Yii::$app->request->post()))
          {
            $request = Yii::$app->request;

              // var_dump($request);
              $data=$request->post('SubMenuForm');
           // var_dump($menuId);
           $sumMenuName=$data['submenu_name'];
           $MenuId=$data['menu_id'];


          $submenuTable= new Submenus();
          $submenuTable->submenu_name=$sumMenuName;
          $submenuTable->menu_id=$MenuId;
          $submenuTable->save();

            $model = new SubMenuForm;
            return $this->render('submenu', ['model'=>$model,]);

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
        /**
         * Displays Photos.
         *
         * @return mixed
         */
        public function actionPhoto()
        {

          $model = new UploadForm;

        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) {
                // file is uploaded successfully
                return;
            }
        }

        return $this->render('upload', ['model' => $model]);
    }



    //     $model = new UploadForm();
    //
    //     if (Yii::$app->request->isPost) {
    //         $model->upload = UploadedFile::getInstance($model, 'uploads');
    //         if ($model->upload()) {
    //             // file is uploaded successfully
    //             return;
    //         }
    //     }
    //
    //     return $this->render('upload', ['model' => $model, ]);
    // }
}
