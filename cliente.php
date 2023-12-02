<?php

include "Usuario.php";
include "interfazCliente.php";


class cliente extends Usuario implements iCliente{
    private $nombre;
    private $password;
    private $telefono;
    private $contrato;

public function __construct($nombre, $password, $telefono, $contrato){
    $this -> setNombre($nombre);
    $this -> setPassword($password);
    $this -> telefono = $telefono;
    $this -> contrato = $contrato;
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
public function setTelefono ($telefono){
    $this -> telefono = $telefono;
}
public function getTelefono (){
    return $this -> telefono;
}
public function setContrato ($contrato){
    $this -> contrato = $contrato;
}
public function getContrato () {
    return $this -> contrato;
}

public function Mostrar () {
    echo $this -> nombre;
    echo ", ";
    echo $this -> password;
    echo ", ";
    echo $this -> telefono;
    echo ", ";
    echo $this -> contrato;
    echo "<br>";
}

}
?>