<?php

include "cliente.php";
include "ListaClientes.php";

 //$u1 = new Usuario("Juan", "LKHKL3"); // Probando a añadir un usuario antes de hacer la clase abstracta.
 $c1 = new cliente("Pepe", "JAJA03", "600606060", "standard");
 $c2 = new cliente("Lola", "YAYAYA01", "655555545", "premium");

 $c1 -> Mostrar();


 $lc = new ListaClientes();
 $lc -> AddUser($c1);
 $lc -> AddUser($c2);
 $lc -> muestraTodos();
 $lc -> MostrarContratos();
 


?>