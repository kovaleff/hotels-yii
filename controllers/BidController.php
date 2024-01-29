<?php

namespace app\controllers;

use app\models\Client;
use app\models\Hotel;
use app\models\Manager;
use app\models\Order;
use Yii;
use yii\web\Controller;

class BidController extends Controller
{
    public function actionBid()
    {
        if(Yii::$app->request->isAjax){
            $faker = \Faker\Factory::create();

            $client = Client::find()->orderBy(new \yii\db\Expression('rand()'))->limit(1)->all();
            $manager = Manager::find()->orderBy(new \yii\db\Expression('rand()'))->limit(1)->all();
            $hotel = Hotel::find()->where(['is_active' => 1])->orderBy(new \yii\db\Expression('rand()'))->limit(1)->all();

            if($client[0]->id){
                $order = new Order();
                $order->client_id = $client[0]->id;
                $order->manager_id = $manager[0]->id;
                $order->hotel_id = $hotel[0]->id;

                $order->check_in = $faker->dateTime()->format('Y-m-d H:i:s');
                $order->check_out = $faker->dateTime()->format('Y-m-d H:i:s');
                $order->price = $faker->numberBetween(1200, 2000);

                $order->save();
                return $order->id;
            }
            return false;
        }

    }

}
