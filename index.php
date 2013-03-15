<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="js/ajax.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script type="text/javascript" languaje="javascript">
            function idElemento(){
                var elemento = document.getElementById("elemento").value;
               
            switch(elemento){
                    
                    case "1":
                        document.write("Opcion 1");
                        break;
                    case "2":
                        document.write("Opcion 2");
                        break;
                    case "3":
                        document.write("Opcion 3");
                        break;
                    case "4":
                        document.write("Opcion 4");
                        break;
                    case "5":
                        document.write("Opcion 5");
                        break;
                    case "6":
                        document.write("Opcion 6");
                        break;
                    case "7":
                        document.write("Opcion 7");
                        break;
                    case "8":
                        document.write("Opcion 8");
                        break;
                }
            }
          
        </script>
        <style type="text/css">
            
        </style>
    </head>
    
    <header>
            <h1>Busqueda de Fondo Notarial</h1>        
    </header>
    
    <body>
         <form method="post" action="handler.php">
        </form>
        
    
        
        <select name="menu_busqueda" id="elemento" onChange="MM_jumpMenu('parent',this,0)" onclick="javascript: idElemento();">
            <option value="0" selected>Seleccione</option>
            <option value="1">Busqueda por Otogante</option>
            <option value="2">Busqueda por Favorecido</option>
            <option value="3">Busqueda por Ototgante Juridico</option>
            <option value="4">Busqueda por Favorecido Juridico</option>
            <option value="5">Busqueda por Fecha</option>
            <option value="6">Busqueda por Nombre del Bien </option>
            <option value="7">Busqueda por Codigo del bien </option>
            <option value="8">Busqueda por Notario </option>
        </select>
        
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
      
        
       // $con=new conectDB;
        //$con->consult("SELECT * FROM usuarios");
      
        //echo "busqueeda por bien<br>";
       // $con->busqueda_bien("FUNDO RUSTICO");
        
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
