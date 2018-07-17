<?php
class UserController extends BaseController {
    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Connect();
        $this->adapter = $this->conectar->connection();
    }

    public function index() {
        //Creamos el objeto Usuario
        $usuario = new User($this->adapter);

        //Conseguimos todos los usuarios
        $allusers = $usuario->getAll();

        //Cargamos la vista index y le pasamos valores
        $this->view("index", array("allusers" => $allusers, "Hola" => "SebaPego"));
    }

    public function create() {
        if (isset($_POST["username"])) {
            //Creamos un usuario
            $user = new User($this->adapter);
            $user->setUserName($_POST["username"]);
            $user->setPassword($_POST["password"]);
            $save = $user->save();
        }
        $this->redirect("Users", "index");
    }

    public function borrar() {
        if (isset($_GET["id"])) {
            $id = (int)$_GET["id"];

            $user = new User($this->adapter);
            $user->deleteById($id);
        }
        $this->redirect();
    }

    public function hola() {
        $user = new UserModel($this->adapter);
        $usu = $user->getAUser();
        var_dump($usu);
    }
}

?>