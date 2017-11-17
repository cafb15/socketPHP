<?php

require 'vendor/autoload.php';

use Ratchet\WebSocket\WsServer;
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use socket\chat;

$server = IoServer::factory(new HttpServer(new WsServer(new chat())), 8080);
$server -> run();