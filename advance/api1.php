<?php
require 'vendor/autoload.php';

$app = new \Slim\App();

// Define routes
$app->get('/books', function ($request, $response, $args) {
    // Return a list of books (GET request)
    $books = array(
        array('id' => 1, 'title' => 'Book 1'),
        array('id' => 2, 'title' => 'Book 2')
    );
    return $response->withJson($books);
});

$app->get('/books/{id}', function ($request, $response, $args) {
    // Return a specific book by ID (GET request)
    $id = $args['id'];
    $book = array('id' => $id, 'title' => 'Book ' . $id);
    return $response->withJson($book);
});

$app->post('/books', function ($request, $response, $args) {
    // Create a new book (POST request)
    $data = $request->getParsedBody();
    $book = array('id' => 3, 'title' => $data['title']);
    return $response->withJson($book);
});

$app->run();
?>