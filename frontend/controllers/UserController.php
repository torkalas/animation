<?php
// Профиль
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use common\models\User;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;

class UserController extends Controller {

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['view'],
                        'allow' => true,
                        'roles' => ['user'],
                    ],
                ],
            ],
        ];
    }

    public function actionView($id)
    {
        if (Yii::$app->user->identity->id == $id) {
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        }else {
            throw new ForbiddenHttpException();
        }

    }

    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}