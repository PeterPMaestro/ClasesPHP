<?php

//include "interfazCliente.php";

class ListaClientes extends cliente{

    public $listaC = array();

    public function __construct(){

    }
    public function AddUser($cliente){
        array_push($this -> listaC, $cliente);
    }
    public function Mostrar(){
      foreach($this ->listaC as $cliente){
       echo "Nombre: " . $cliente->getNombre() . "<br>";
      }
    }
      public function MostrarPass(){
        foreach($this -> listaC as $cliente){
          echo "Password: " . $cliente -> getPassword()  . "<br>";
        }
      } 
      public function MostrarContratos(){
        foreach($this -> listaC as $cliente){
          echo $cliente -> getContrato() . "<br>";
        }
      } 
     public function muestraTodos(){
        foreach($this -> listaC as $cliente){
          echo "Nombre: " . $cliente -> getNombre() . ". Password: " . $cliente -> getPassword() ." Teléfono: " . $cliente -> getTelefono() . " Contrato: " . $cliente -> getContrato() ."<br>";
        }
     }
}

?>