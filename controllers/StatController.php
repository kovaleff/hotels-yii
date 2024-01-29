<?php

namespace app\controllers;

use app\models\Client;
use app\models\Hotel;
use app\models\Manager;
use app\models\Order;
use Yii;
use yii\web\Controller;

class StatController extends Controller
{
    public function actionManagers()
    {
        if (Yii::$app->request->isAjax) {
            $tops = new  \app\services\Tops();
            $managers = $tops->getTopMangers();
            return json_encode($managers);
        }
    }
    public function actionHotels()
    {
        if (Yii::$app->request->isAjax) {
            $tops = new  \app\services\Tops();
            $hotels = $tops->getTopHotels();
            return json_encode($hotels);
        }
    }
    public function actionClients()
    {
        if (Yii::$app->request->isAjax) {
            $tops = new  \app\services\Tops();
            $clients = $tops->getTopClients();
            return json_encode($clients);
        }
    }

}
