<?php
include '../controler/conectDB.php';

class busca_persona {
    
    function __construct() {
        $busqueda=new conectDB;
    }
     
 function muestra(){
        $busqueda=new conectDB;
        
        
$nombres = $_REQUEST['nombre'];
$paterno = $_REQUEST['ap_pat'];
$materno = $_REQUEST['ap_mat'];

if(!empty($paterno)){
    if(!empty($materno)){
        if(!empty($nombres)){
            
            $busqueda->buscarsql($paterno, $materno, $nombres);
                    
    
        }
        else
             $busqueda->buscarsql($paterno, $materno, null);
            echo "No ingreso nombre";
    }
    
}
else
            echo "No igreso ningun campo";

}



/*if (!empty($nombres)) {
    if (!empty($paterno)) {
        if (!empty($materno)) {
//echo "sql (nombre, paterno, materno)";
            $query = $busqueda->buscarsql($paterno, $materno, $nombres);
            
        } else {
//echo "sql (nombre, paterno)";
            $query = $busqueda->buscarsql($paterno, $materno, null);
        }
    } else {
        if (!empty($materno)) {
//echo "sql (nombre, materno)";
            $query = $busqueda->buscarsql($paterno, null, $nombres);
        } else {
//echo "sql (nombre)";
            $query = $busqueda->buscarsql($paterno, null, null);
        }
    }
//SI  ESYA VACIO
} else {
    if (!empty($paterno)) {
        if (!empty($materno)) {
//echo "SQL (PATERNO, MATERNO)";
            $query = $busqueda->buscarsql(null, $materno, $nombres);
        } else {
//echo "SQL (PATERNO)";
            $query = $busqueda->buscarsql(null, $materno, null);
        }
    } else {
        if (!empty($materno)) {
//echo "SQL (MATERNO)";
            $query = $busqueda->buscarsql(null, null, $nombres);
            echo "solo ingreso nombre";
        } else {
            
        }
    }
}

}
   */ 
    
}
$busqa=new busca_persona;
$busqa->muestra();


?>
