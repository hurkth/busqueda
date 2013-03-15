<?php
include 'conectDB.php';

class busqueda_bien {
    function __construct() {
        $link=new conectDB;
        $link->connect();
    }
}

?>
