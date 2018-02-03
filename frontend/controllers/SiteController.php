<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use backend\models\Menu;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */

     public $menu;

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
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

      $menu = (new \yii\db\Query())
          ->select(['menu_name', 'menu_order','menu_id'])
          ->from('menu')
          ->all();

          $subMenu = (new \yii\db\Query())
              ->select(['submenu_name', 'submenu_id','menu_id'])
              ->from('submenus')
              ->all();
              for ($i=0 ; $i < count($menu); $i ++)
              {
                $menu[$i]['submenus']=[];

                for ($j=0 ; $j < count($subMenu); $j ++)
                {
                    if($menu[$i]['menu_id'] == $subMenu[$j]['menu_id'])
                    {
                      array_push($menu[$i]['submenus'],$subMenu[$j] );
                    }
                }
              }
      //
      // echo "<pre>";
      // var_dump($menu);
      // echo "</pre>";


      $this->menu = $menu;
      if(count($this->menu) != 0){
      Yii::$app->view->params['menu'] = $this->menu;}

        return $this->render('index');
    }
    /**
     * Displays Admin Page.
     *
     * @return mixed
     */
    public function actionAdmin()
    {
        return $this->render('admin');
    }
    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

   // /**
   //   * Displays about page.
   //   *
   //   * @return mixed
   //   */
   //  public function actionHardware()
   //  {
   //      return $this->render('hardware');
   //  }

   //   /**
   //   * Displays about page.
   //   *
   //   * @return mixed
   //   */
   //  public function actionHouseandgifts()
   //  {
   //      return $this->render('houseandgifts');
   //  }

   //   /**
   //   * Displays about page.
   //   *
   //   * @return mixed
   //   */
   //  public function actionLawnandgarden()
   //  {
   //      return $this->render('lawnandgarden');
   //  }

   //   /**
   //   * Displays about page.

   //   * @return mixed
   //   */
   //  public function actionSpecialtyitems()
   //  {
   //      return $this->render('specialtyitems');
   //  }


    public function actionPage()
    {

      if(YII::$app->request->get())
      {

      //get term and search up details to be displayed
      $term = YII::$app->request->get('menu_id');
      $term2 = YII::$app->request->get('submenu_id');

      if ( isset($term2) ){

        $rows = (new \yii\db\Query())
          ->select('*')
          ->from('pages')
          ->where(['like', 'menu_id', $term])
          ->andWhere(['like', 'submenu_id', $term2])
          ->all();

     } else {
       $rows = (new \yii\db\Query())
         ->select('*')
         ->from('pages')
         ->where(['like', 'menu_id', $term])
         ->andWhere(['submenu_id' => null])
         ->all();
     }

      //get menu items
      $menu = (new \yii\db\Query())
          ->select(['menu_name', 'menu_order','menu_id'])
          ->from('menu')
          ->all();
      //get submenu items

          $subMenu = (new \yii\db\Query())
              ->select(['submenu_name', 'submenu_id','menu_id'])
              ->from('submenus')
              ->all();
              for ($i=0 ; $i < count($menu); $i ++)
              {
                $menu[$i]['submenus']=[];

                for ($j=0 ; $j < count($subMenu); $j ++)
                {
                    if($menu[$i]['menu_id'] == $subMenu[$j]['menu_id'])
                    {
                      array_push($menu[$i]['submenus'],$subMenu[$j] );
                    }
                }
              }
      //
      // echo "<pre>";
      // var_dump($menu);
      // echo "</pre>";

      $this->menu = $menu;
      if(count($this->menu) != 0){
      Yii::$app->view->params['menu'] = $this->menu;}


        return $this->render('department',[
              'results' => $rows,
          ]);
      }
    }

    /**

     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
