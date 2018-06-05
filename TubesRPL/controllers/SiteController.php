<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\UserForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
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
     * {@inheritdoc}
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
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->render('tempatwisata');
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionTempatwisata()
    {
        return $this->render('tempatwisata');
    }

    public function actionTempatwisata2()
    {
        return $this->render('tempatwisata2');
    }

    public function actionTempatwisata3()
    {
        return $this->render('tempatwisata3');
    }

    public function actionObjekwisata1()
    {
        return $this->render('objekwisata1');
    }

    public function actionObjekwisata2()
    {
        return $this->render('objekwisata2');
    }

    public function actionObjekwisata3()
    {
        return $this->render('objekwisata3');
    }

    public function actionObjekwisata4()
    {
        return $this->render('objekwisata4');
    }

    public function actionObjekwisata5()
    {
        return $this->render('objekwisata5');
    }

    public function actionObjekwisata6()
    {
        return $this->render('objekwisata6');
    }

    public function actionObjekwisata7()
    {
        return $this->render('objekwisata7');
    }

    public function actionObjekwisata8()
    {
        return $this->render('objekwisata8');
    }

    public function actionObjekwisata9()
    {
        return $this->render('objekwisata9');
    }

    public function actionObjekwisata10()
    {
        return $this->render('objekwisata10');
    }

    public function actionObjekwisata11()
    {
        return $this->render('objekwisata11');
    }

    public function actionObjekwisata12()
    {
        return $this->render('objekwisata12');
    }

   
    public function actionUser(){
        $model = new UserForm;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // valid data received in $model

            // do something meaningful here about $model ...

            return $this->render('user-confirm', ['model' => $model]);
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('user', ['model' => $model]);
        }
    }
}
