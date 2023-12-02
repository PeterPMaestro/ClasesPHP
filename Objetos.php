<?php

include "cliente.php";
include "ListaClientes.php";


 $c1 = new cliente("Pepe", "JAJA03", "600606060", "standard");
 $c2 = new cliente("Lola", "YAYAYA01", "655555545", "premium");

 $c1 -> Mostrar();
 $c2 -> Mostrar();
 $lc = new ListaClientes();
 $lc -> AddUser($c1);
 $lc -> AddUser($c2);
 $lc -> muestraTodos();
 $lc -> MostrarContratos();
 


?>