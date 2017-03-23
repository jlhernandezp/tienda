<!DOCTYPE html>
<html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
    <head>
        <meta charset="UTF-8">
        <title>Editar</title>
    </head>
    <body>
  
        <form name='edicion' method="post" action="actualizar.php">
            <?php 
                echo "<input type='hidden' name='cod' value='".$_POST['cod']."' />";
            ?>
            <label>Producto:</label><br/>
            <input type='text' name='nombreCorto' value='<?php echo $_POST['nombre_corto']; ?>' /><br/>
            <label>Nombre</label><br/>
            <input type='text' name='nombre' value='<?php echo $_POST['nombre']; ?>'/><br/>
            <label>Descripción</label><br/>
            <input type='textarea' name='descripcion' value='<?php echo $_POST['descripcion']; ?>'/><br/>
            <label>PVP</label><br/>
            <input type='text' name='pvp' size='25'value='<?php echo $_POST['pvp']; ?>' /><br/>
            <input type='submit' name='actualizar' value='Actualizar'/>
            <input type='submit' name='cancelar' value='Cancelar'/>
            
        </form>
    </body>
</html>