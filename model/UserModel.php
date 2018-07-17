<?php
class UserModel extends BaseModel {
    private $table;

    public function __construct($adapter) {
        $this->table = "users";
        parent::__construct($this->table, $adapter);
    }

    //Metodos de consultas
    public function getAUser() {
        $query = "SELECT * FROM users WHERE id='2'";
        $user = $this->executeSql($query);
        return $user;
    }
}

?>