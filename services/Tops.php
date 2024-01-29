<?php

namespace app\services;


use Yii;

class Tops{
    private $connection;

    function __construct(){
        $this->connection = Yii::$app->getDb();
    }

    function getTopMangers(){
        $command = $this->connection->createCommand("
            SELECT
                `order`.manager_id, manager.name, count(manager.id) as total_orders
            FROM
                `order`
            INNER JOIN manager ON manager.id = `order`.manager_id
            GROUP BY manager.id
            ORDER BY total_orders DESC
            LIMIT 3
        ");
        return $command->queryAll();

    }
    function getTopHotels(){
        $command = $this->connection->createCommand("SELECT
            `order`.hotel_id, hotel.name, count(hotel.id) as total_hotels
        FROM
            `order`
        INNER JOIN hotel ON hotel.id = `order`.hotel_id
        GROUP BY hotel.id
        ORDER BY total_hotels DESC
        LIMIT 3;");
        return $command->queryAll();
    }
    function getTopClients(){
        $command = $this->connection->createCommand("SELECT
            `order`.client_id, client.name, client.inn, count(client.id) as total_clients
        FROM
            `order`
        INNER JOIN client ON client.id = `order`.client_id
        GROUP BY client.id
        ORDER BY total_clients DESC
        LIMIT 3;");
        return $command->queryAll();
    }
}
