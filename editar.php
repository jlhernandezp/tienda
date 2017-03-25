<!DOCTYPE html>
<html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
    <head>
        <meta charset="UTF-8">
        <link href="dwes.css" rel="stylesheet" type="text/css">
        <title>Editar</title>
    </head>
    <body>
        <div id="encabezado">
            <h1>Tarea:Edición de un producto: </h1>
        </div>
        <div id="contenido">
            <form name='edicion' method="post" action="actualizar.php">
                <?php 
                    echo "<input type='hidden' name='cod' value='".$_POST['cod']."' />";
                ?>
                <h2><label>Producto:</label><br/></h2>
                <input type='text' name='nombreCorto' size="100" value='<?php echo $_POST['nombre_corto']; ?>' /><br/>
                <label>Nombre:</label><br/>
                <input type='text' name='nombre' size="100" value='<?php echo $_POST['nombre']; ?>'/><br/>
                <label>Descripción:</label><br/>
                <textarea   name='descripcion' rows="9" cols="100" wrap="soft"><?php echo $_POST['descripcion']; ?></textarea><br/>
                <label>PVP:</label><br/>
                <input type='text' name='pvp' size='8'value='<?php echo $_POST['pvp']; ?>' /><br/>
                <input type='submit' name='actualizar' value='Actualizar'/>
                <input type='submit' name='cancelar' value='Cancelar'/>

            </form>
        </div>
    </body>
</html>