<?php
    abstract class usuario{
       private $nombre;
       private $password;

        public function __construct ($nombre, $password){
            $this -> nombre = $nombre;
            $this -> password = $password;
        }
        public function getNombre(){
            return $this -> nombre;
        }
        public function setNombre ($nombre){
            $this -> nombre = $nombre;
        }
        public function getPassword (){
            return $this -> password;
        }
        public function setPassword ($password){
            $this -> password = $password;
        }
        public function MostrarUsuario($user){
            echo $user -> getNombre();
            echo ", ";
            echo $user -> getPassword();
        }
    }

?>