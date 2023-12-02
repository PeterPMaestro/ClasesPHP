<?php


//HERENCIA E IMPLEMENTACIÓN DE UNA INTERFAZ
include "Usuario.php";
include "interfazCliente.php";


class cliente extends Usuario implements iCliente{  
    private $telefono;
    private $contrato;

public function __construct($nombre, $password, $telefono, $contrato){
    parent::__construct($nombre, $password); 
    $this -> telefono = $telefono;
    $this -> contrato = $contrato;

}
public function setTelefono ($telefono){
    $this -> telefono = $telefono;
}
public function getTelefono(){
    return $this -> telefono;
}
public function setContrato ($contrato){
    $this -> contrato = $contrato;
}
public function getContrato() {
    return $this -> contrato;
}
public function Mostrar() {
   echo $this -> getNombre();
    echo ", ";
    echo $this -> getPassword();
    echo ", ";
    echo $this -> telefono;
    echo ", ";
    echo $this -> contrato;
    echo "<br>";
     /*return [$this -> getNombre(), $this -> getPassword(), $this -> telefono, $this -> contrato];*/
}
}
?>