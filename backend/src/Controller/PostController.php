<?php

namespace App\Controller;

class PostController {
    private $host;
    private $username;
    private $db;

    private function getDao() {
        return new \App\Dao\PostsDao("localhost", "root", "messagesclients");
    }

    public function show($param) {
        // $user = $userDao->getUserById(1);

        echo 'post: ' . $param ;
    }

    public function create() {
        // $userDao->insertUser("john_doe", "john@example.com", "password123");

        echo 'created post: ' . $_POST['foo'] . ' : ' . $_POST['bar'] ;
    }

    public function showAll() {
        $messages = $this->getDao()->getPosts();

        echo json_encode($messages);
    }

    public function delete($param) {
        // $userDao->deleteUser(1);

        echo json_encode($param);
    }
}

?>