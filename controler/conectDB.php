<?php

class mostrar {
    
    
    function muestra_all($num){
        
        $link=  mysql_query("SELECT escrifavor1.cod_rel, escrituras1.cod_sct, escrituras1.nom_bie,escrituras1.fec_doc,escrituras1.can_fol,escrituras1.num_fol,escrifavor1.cod_inv,escriotor1.cod_inv,escriotor1.cod_rel, involucrados1.Pat_inv, involucrados1.Mat_inv,involucrados1.Nom_inv, notarios.pat_not,notarios.mat_not,notarios.nom_not
                             FROM escrifavor1, involucrados1, escrituras1,escriotor1,notarios
                             WHERE involucrados1.Cod_inv=".$num."
                             AND escrifavor1.cod_inv = involucrados1.Cod_inv 
                             AND escrifavor1.cod_sct=escrituras1.cod_sct
                             AND escriotor1.cod_sct=escrituras1.cod_sct
                             AND escrituras1.cod_not=notarios.cod_not");
        while($lista=  mysql_fetch_row($link))
            echo "<li>".$lista[1]."--".$lista[2]."--".$lista[3]."--".$lista[4]."--".$lista[5]."--".$lista[6]."--".$lista[7]."--".$lista[8]."--".$lista[9]."--".$lista[10]."--".$lista[11]."--".$lista[12]."--".$lista[13]."--".$lista[14];
    }
}


class conectDB {
    
    private $server = "localhost";
    private  $user = "root";
    private $pass = "";
    private $data_base = "dbarp";
    
    function __construct() {
        $coneccion= mysql_connect($this->server, $this->user, $this->pass)
                or die("Fallo al establecer conmeccion con Base de Datos");
        mysql_select_db($this->data_base)
                or die("Error en la seleccion de base de datos");
        return $coneccion;
    }
    /*function connect(){
        $coneccion= mysql_connect($this->server, $this->user, $this->pass)
                or die("Fallo al establecer conmeccion con Base de Datos");
        mysql_select_db($this->data_base)
                or die("Error en la seleccion de base de datos");
        return $coneccion;        
        }    */
    function consult($query){        
        $link= mysql_query($query);
        while($lista= mysql_fetch_row($link))
        echo "<li>".$lista[1]."  ".$lista[2]."  ".$lista[3]."  ".$lista[4];
        
    }
    function busqueda_bien($nombre){
        
       $link=  mysql_query("SELECT * from escrituras1 WHERE nom_bie LIKE'".$nombre."'");
       while($lista= mysql_fetch_array($link))
               echo "<li>".$lista['cod_sct']."--".$lista['nom_bie']."--".$lista['cod_not'];
    }

    function busqueda_fecha($date){
        
        $link=  mysql_query("SELECT * FROM  `escrituras1` WHERE  `fec_doc` = '".$date."'");
        while($lista=  mysql_fetch_array($link))
                echo "<li>".$lista['cod_sct']."--".$lista['nom_bie']."--".$lista['cod_not'];
    }
    
    function buscarsql($ap_paterno,$ap_materno,$nombre){
       
       if(!is_null($ap_paterno)){
            if(!is_null($ap_materno)){
               if(!is_null($nombre)){                 
                   $link= mysql_query("SELECT *FROM `involucrados1` WHERE `Pat_inv` LIKE '". $ap_paterno."' AND `Mat_inv` LIKE '".$ap_materno."'AND `Nom_inv` LIKE'".$nombre."'");       
                } 
                else{
                   $link= mysql_query("SELECT *FROM `involucrados1` WHERE `Pat_inv` LIKE '". $ap_paterno."' AND `Mat_inv` LIKE '".$ap_materno."'");       
                }                   
            }
            
            }
       while($lista= mysql_fetch_array($link))
       echo "<li>".$lista['Cod_inv']."--".$lista['Pat_inv']."--".$lista['Mat_inv']."--".$lista['Nom_inv'];
       
    }
    
    
    function busqueda_otorgante($ap_paterno,$ap_materno){
    $link= mysql_query("SELECT *FROM `involucrados1`WHERE `Pat_inv` LIKE '". $ap_paterno."' AND `Mat_inv` LIKE '".$ap_materno."'");       
       while($lista= mysql_fetch_array($link))
       echo "<li>".$lista['Pat_inv']."--".$lista['Mat_inv']."--".$lista['Nom_inv'];
    }   
    
    function muestra_all($num){
        
        $link=  mysql_query("SELECT escrifavor1.cod_rel, escrituras1.cod_sct, escrituras1.nom_bie,escrituras1.fec_doc,escrituras1.can_fol,escrituras1.num_fol,escrifavor1.cod_inv,escriotor1.cod_inv,escriotor1.cod_rel, involucrados1.Pat_inv, involucrados1.Mat_inv,involucrados1.Nom_inv, notarios.pat_not,notarios.mat_not,notarios.nom_not
                             FROM escrifavor1, involucrados1, escrituras1,escriotor1,notarios
                             WHERE involucrados1.Cod_inv=".$num."
                             AND escrifavor1.cod_inv = involucrados1.Cod_inv 
                             AND escrifavor1.cod_sct=escrituras1.cod_sct
                             AND escriotor1.cod_sct=escrituras1.cod_sct
                             AND escrituras1.cod_not=notarios.cod_not");
        while($lista=  mysql_fetch_row($link))
            echo "<li>".$lista[1]."--".$lista[2]."--".$lista[3]."--".$lista[4]."--".$lista[5]."--".$lista[6]."--".$lista[7]."--".$lista[8]."--".$lista[9]."--".$lista[10]."--".$lista[11]."--".$lista[12]."--".$lista[13]."--".$lista[14];
    }
}

    
    ?>
