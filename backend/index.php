<?php

require 'vendor/autoload.php';

$router = new App\Router($_GET['url']); 

// routes
$router->get('/', function(){
    ?>
    <form action="posts/new" method="post">
        <input type="text" name="foo">
        <input type="text" name="bar">
        <button type="submit">Send</button>
    </form>
    <?php
 });


$router->post('/posts/new', "Post#create");
$router->get('/posts/:id', "Post#show");
$router->delete('/posts/:id', "Post#delete");

$router->get('/posts', "Post#showAll"); 
$router->get('/not-found', function() { echo "not found"; }, '404');


$router->run(); 

?>


