<?php
include '../controler/conectDB.php';


class busca_nombre3 {
    
   
 function muestra(){
        $busqueda=new conectDB;
        
$nombre_bien = $_REQUEST['nombre_bien'];
$busqueda->busqueda_bien($nombre_bien);

 }
}
$bus=new busca_nombre3;
$bus->muestra();

?>
