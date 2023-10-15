<?php

namespace App\Http\Controllers;

use PhpAmqpLib\Channel\AMQPChannel;
use PhpAmqpLib\Connection\AbstractConnection;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class TestRabbitController extends Controller
{
    private AbstractConnection $connection;

    private AMQPChannel $chanel;

    public function __construct()
    {
        $this->connection = AMQPStreamConnection::create_connection([[
            'host' => 'rabbitmq',
            'port' => 5672,
            'user' => 'user',
            'password' => 'user',
        ]]);

        $this->chanel = $this->connection->channel();
    }

    public function index()
    {
        $msg = new AMQPMessage('Hello World!');
        $this->chanel->basic_publish($msg, '', 'hello');
    }


    public function __destruct()
    {
        $this->chanel->close();
        $this->connection->close();
    }
}
