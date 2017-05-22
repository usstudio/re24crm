<?php

namespace app\controllers;

use Yii;
use app\models\Agent;
use app\models\AgentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AgentController implements the CRUD actions for Agent model.
 */
class ProfileController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Agent models.
     * @return mixed
     */
    public function actionIndex($id = '')
    {
        if($id == '') $id =Yii::$app->user->id;
        $arProfile  = Agent::find()->where(['user_id' => $id])->one();
        return $this->render('index', [
            'arProfile' => $arProfile,
        ]);
    }

    /**
     * Displays a single Agent model.
     * @param integer $id
     * @return mixed
     */

}
