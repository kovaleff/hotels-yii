<?php


namespace app\commands;

use app\models\Client;
use app\models\Hotel;
use app\models\Manager;
use app\models\Order;
use yii\console\Controller;

class SeedController extends Controller{
    public function actionIndex(){
        $faker = \Faker\Factory::create();

        $client = new Client();
        for($i = 0; $i<10; $i++){
            $client->setIsNewRecord(true);
            $client->id = null;
            $client->name = $faker->userName();
            $client->address = $faker->address();
            $client->inn = (string)$faker->numberBetween(1999,3999);
            $client->save();
        }

        $hotel = new Hotel();
        for($i = 0; $i<10; $i++){
            $hotel->setIsNewRecord(true);
            $hotel->id = null;
            $hotel->name = $faker->userName();
            $hotel->is_active = 1;
            $hotel->save();
        }

        $manager = new Manager();
        for($i = 0; $i<10; $i++){
            $manager->setIsNewRecord(true);
            $manager->id = null;
            $manager->name = $faker->userName();
            $manager->save();
        }

        $order = new Order();
        for($i = 0; $i<10; $i++){
            $order->setIsNewRecord(true);
            $order->id = null;

            $client = Client::find()->orderBy(new \yii\db\Expression('rand()'))->limit(1)->all();
            $order->client_id = $client[0]->id;

            $manager = Manager::find()->orderBy(new \yii\db\Expression('rand()'))->limit(1)->all();
            $order->manager_id = $manager[0]->id;

            $hotel = Hotel::find()->orderBy(new \yii\db\Expression('rand()'))->limit(1)->all();
            $order->hotel_id = $hotel[0]->id;

            $order->check_in = $faker->dateTime()->format('Y-m-d H:i:s');
            $order->check_out = $faker->dateTime()->format('Y-m-d H:i:s');
            $order->price = $faker->numberBetween(12000, 2000);

            $order->save();
        }

    }
}
