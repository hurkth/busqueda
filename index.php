<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="js/ajax.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style type="text/css">
            
        </style>
    </head>
    
    <header id="principal">
            <span id="titulo">Busqueda Fondo Notarial</span>       
    </header>
    
    <body>
         <form method="post" action="handler.php">
        </form>
                
        <div id="otorgantes" style="display: none;">
            <form>
                <label for="nombre">Nombre:</label>
                <input id="nombre" name="nombre" placeholder="Nombre completo"><br>
                <label for="ap_pat">Apellido	Paterno</label>
                <input id="email" name="email" type="email" placeholder="Paterno"><br>
                <label for="ap_maty">Apellido Materno</label>
                <input id="mensaje" name="mensaje" placeholder="Materno">
                <input id="submit" name="submit" type="submit" value="Enviar"><br>
                <input type="search"><br>
                <label for="meeting">Fecha  : </label><input id="meeting" type="date" value="2011-01-13"/> 
            </form>    
        </div>
        
        <div id="favorecidos" style="display: none;">
            <form>
                <label for="nombre">Nombre:</label>
                <input id="nombre" name="nombre" placeholder="Nombre completo"><br>
                <label for="ap_pat">Apellido	Paterno</label>
                <input id="email" name="email" type="email" placeholder="Paterno"><br>
                <label for="ap_maty">Apellido Materno</label>
                <input id="mensaje" name="mensaje" placeholder="Materno">
                <input id="submit" name="submit" type="submit" value="Enviar"><br>
                <input type="search"><br>
                <label for="meeting">Fecha  : </label><input id="meeting" type="date" value="2011-01-13"/> 
            </form>    
        </div>
        
        <aside>
        <div id="menu">
            <ul>
                <li><a href="javascript:Enviar('forms/buscar_otorgante.html','contenido')" title="1">Busqueda por Otorgante</a></li>
                <li><a href="javascript:Enviar('forms/buscar_favorecido.html','contenido')" title="2">Busqueda por Favorecido</a></li>
                <li><a href="javascript:Enviar('forms/buscar_fecha.html','contenido')" title="2">Busqueda por Fecha</a></li>
                <li><a href="javascript:Enviar('forms/buscar_nombre_bien.html','contenido')" title="2">Busqueda por Nombre del bien</a></li>
                <li><a href="javascript:Enviar('forms/buscar_otor_juridico.html','contenido')" title="2">Busqueda por Otorgante Juridico</a></li>
                <li><a href="javascript:Enviar('forms/buscar_fav_juridico.html','contenido')" title="2">Busqueda por Favorecido Juridico</a></li>
                
            </ul>
           
        </div>
         </aside>
        
        <section>
       <div id="contenido" >           
          
            
        </div>
            </section>
        

        <?php
        include 'controler/conectDB.php';
        
        //include 'controler/busqueda_otorgante.php';
      
        
     //$con=new conectDB;
        //$con->consult("SELECT * FROM usuarios");
      
        //echo "busqueeda por bien<br>";
      //$con->busqueda_bien("FUNDO RUSTICO");
        
       // echo "<br>consulta por fecha<br>";
       // $con->busqueda_fecha("1998-07-22");
        
       // echo "Busca nombre Otorgante";
        //$con->busqueda_otorgante("quispe", "quispe", "rolando");
       // $con->busqueda_otorgante("quispe", "quispe");
        
        //echo "bien otorogante notario<br>";
           // $con->muestra_all(4);
        
        ?>
    </body>
    
    <footer>
        
        Equipo de informatica, Archivo Regional Puno 2013
    </footer>
</html>
<style type="text/css">
body {

} #principal {

    
display: block;
width: 500px;
margin: 50px auto;
padding: 15px;
text-align: center;
text-color:blue;
border: 1px solid #999999;
background: #DDDDDD;
-moz-border-radius: 20px;
-webkit-border-radius: 20px;
border-radius: 20px;
-moz-box-shadow: rgb(150,150,150) 5px 5px 10px;
-webkit-box-shadow: rgb(150,150,150) 5px 5px 10px;
box-shadow: rgb(150,150,150) 5px 5px 10px;
background: -webkit-linear-gradient(top, #FFFFFF, #006699);
background: -moz-linear-gradient(top, #FFFFFF, #006699);
-moz-transform: scale(2);
-webkit-transform: scale(2);

-moz-transition: -moz-transform 1s ease-in-out 0.5s;
-webkit-transition: -webkit-transform 1s ease-in-out 0.5s;
} #principal:hover{
-moz-transform: rotate(5deg);
-webkit-transform: rotate(5deg);
}
 
</style>
