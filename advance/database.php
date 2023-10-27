
<?php
require 'vendor/autoload.php';

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;

class MyWebSocketServer implements MessageComponentInterface {
    public function onOpen(ConnectionInterface $conn) {
        // Called when a new WebSocket connection is established
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        // Called when a message is received from a client
    }

    public function onClose(ConnectionInterface $conn) {
        // Called when a WebSocket connection is closed
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        // Called when an error occurs
    }
}

$server = IoServer::factory(
    new WsServer(new MyWebSocketServer),
    8080
);

$server->run();



?>






