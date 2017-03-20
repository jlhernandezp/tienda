<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Plantilla para Ejercicios Tema 3</title>
  <link href="dwes.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
        $miConexion=new mysqli('localhost','root','','dwes');
        if ($miConexion->connect_error)
            echo "Error conectando con la base de datos: ".$miConexion->connect_error;
        else {
            
                $resultado=$miConexion->query("SELECT `cod` FROM `familia`");    
    ?>

<div id="encabezado">
	<h1>Tarea:Listado de productos de una familia: </h1>
	<form id="form_seleccion" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <label>Familia: </label> 
            <select name='familia' >
                <?php 
                    $familia=$resultado->fetch_array();
                    while ($familia){
                        if ($familia[0]==$_POST['familia'])   // si familia post es igual a familia entonces selected
                            echo "<option value='$familia[0]' selected>".$familia[0]."</option>";
                        else
                            echo "<option value='$familia[0]'>".$familia[0]."</option>";
                        $familia=$resultado->fetch_array();
                    }
            } //borrar con el comentario de abajo 

        ?>
                
            </select>
            <input type='submit' name='mostrar' value='Mostrar productos' />
        </form>
</div>

<div id="contenido">
	<h2>Contenido</h2>
        <?php
            if (isset($_POST['mostrar'])){
                $resultado=$miConexion->query("SELECT * FROM `producto` WHERE `familia`='".$_POST['familia']."'");
            
                $producto=$resultado->fetch_array();
                echo "<form method='post' action='editar.php'><table>";    
                while ($producto){
                        echo "<tr><td>".$producto[2]."</td><td>".$producto[4]."</td><td><input type='submit' name='editar$producto[0]' value='Editar'</td></tr>";
                     
                        $producto=$resultado->fetch_array();
                    }
                echo "</table></form>";
            }
        
        
          
        $miConexion->close();
        ?>
</div>
   
<div id="pie">
</div>
</body>
</html>