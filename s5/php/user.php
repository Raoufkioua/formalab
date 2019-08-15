<?php
require_once("./connextion.php");

class User
{
    //les attributs

    public $nom;
    public $id;
    public $prenom;
    public $age;

    //constructeur (le distructeur pour effacer lobjet)
    /*function __construct ($n,$p,$a){
$this.$nom->$n;
$this.$prenom->$p;
$this.$age->$a;
}*/
    //les methodes
    /* function direBonjour($nom)
    {
        echo "<h1> bonjour $nom </h1>";
    }
    function direBonjour1()
    {
        echo "<h1> bonjour $this->nom </h1>";
    }*/

    public function insertUser()
    {
        $base = Connextion::connect();
        $req = "insert into users values (null,'$this->nom','$this->prenom',$this->age)";
        $res = $base->exec($req); // 
        if ($res == 1) {
            echo "user inserted ! ";
        } else {
            echo "Error";
        }
    }

    public function deleteUser()
    {
        $base = Connextion::connect();
        $req = "delete from users where iduser = $this->id";
        $res = $base->exec($req);
    }
public static function updateUser(){
    $base = Connextion::connect();
    $req = "update users set nom =  where iduser = $this->id";
    $res = $base->exec($req);



}

    public static function readAll()
    {

        $base = Connextion::connect();
        $req = "select * from users";
        $res = $base->query($req);
        return $res;
    }


    /* //class fuction on peut acceder que atraver la class user
    public static function hello()
    {
        echo "<h1>hello</h1>";
    }*/
}
    /*
CRUD
c: create
r: read
u: update
d: delete
*/
   /* function insertUser()
    {
        echo "<h1>insert user</h1>";
    }
    function deleteUser()
    {
        echo "<h1>delete user</h1>";
    }
    function updateUser()
    {
        echo "<h1>update user</h1>";
    }
    function readOneUser()
    {
        echo "<h1>read one user</h1>";
    }
    function readAllUser()
    {
        echo "<h1>read all user</h1>";
    }
}
*/
