<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Actualizando...</title>
    </head>
    <body>
              <?php
            if (isset($_POST['actualizar'])){
                $miConexion=new mysqli('localhost','root','','dwes');
                if ($miConexion->connect_error){
                    echo "Error conectando con la base de datos: ".$miConexion->connect_error;
                } else {

                        $sentencia_sql="UPDATE PRODUCTO SET nombre='".$_POST['nombre'];
                        $sentencia_sql.="', nombre_corto='".$_POST['nombreCorto'];
                        $sentencia_sql.="', descripcion='".$_POST['descripcion'];
                        $sentencia_sql.="' PVP='".$_POST['pvp']."' WHERE cod='".$_POST['cod']."';";
                        $miConexion->query($sentencia_sql);

                    }
            }
               ?>
    </body>
</html>
