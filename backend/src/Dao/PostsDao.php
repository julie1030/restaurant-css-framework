<?php

namespace App\Dao;
use mysqli as MySQLiAlias;

class PostsDao {
    private $connection;
    private $database;

    public function __construct($host, $username, $database) {
        $this->connection = new MySQLiAlias($host, $username, '', $database);
        $this->database = $database;

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function getPosts() {
        $query = "SELECT * FROM $this->database .`messages` LIMIT 1000;";
        $result = $this->connection->query($query);

        if ($result === false) {
            die("Error executing request : " . $this->connection->error);
        }

        $messages = [];

        if ($result && $result->num_rows > 0) {
            while ($message = $result->fetch_assoc()) {
                $messages[] = $message;
            }
            $result->free();
        }

        return $messages;
    }

    // Method to insert a new user
    public function createMessage($username, $email, $password) {
        $username = $this->db->real_escape_string($username);
        $email = $this->db->real_escape_string($email);
        $password = $this->db->real_escape_string($password);

        $query = "SELECT * FROM  LIMIT 1000;";

        $query = "INSERT INTO $this->database .`persons` (username, email, password) VALUES ('$username', '$email', '$password')";
        $result = $this->db->query($query);

        return $result;
    }

    // // Method to delete a user
    // public function deleteUser($id) {
    //     $id = $this->db->real_escape_string($id);

    //     $query = "DELETE FROM users WHERE id = $id";
    //     $result = $this->db->query($query);

    //     return $result;
    // }

}


?>
