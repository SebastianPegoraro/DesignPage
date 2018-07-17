<?php
class User extends BaseEntity {
    private $id;
    private $userName;
    private $password;
    private $createdAt;

    public function __construct($adapter) {
        $table = "users";
        parent::__construct($table, $adapter);
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
    }

    public function save() {
        $query = "INSERT INTO users (id, username, password, created_at)
                    VALUES (NULL, '".$this->userName."', '".$this->password."', NULL);";
        $save = $this->db()->query($query);
        //$this->db()->error;
        return $save;
    }
}
?>