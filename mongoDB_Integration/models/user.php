<?php
require_once __DIR__ . '/../config/mongodb.php';

class User {

    private $collection;

    public function __construct() {
        global $db;
        $this->collection = $db->users;
    }

    public function findByEmail($email) {
        return $this->collection->findOne(['email' => $email]);
    }

    public function create($name, $email, $password) {
        return $this->collection->insertOne([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'role' => 'user',
            'created_at' => new MongoDB\BSON\UTCDateTime()
        ]);
    }

    public function getAllUsers() {
        return $this->collection->find();
    }

    public function deleteByEmail($email) {
        return $this->collection->deleteOne(['email' => $email]);
    }
}
?>
