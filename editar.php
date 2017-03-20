<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar</title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <form name='edicion'>
            <label>Producto:</label><br/>
            <input type="text" name='nombreCorto' /><br/>
            <label>Nombre</label><br/>
            <input type="text" name='nombre' /><br/>
            <label>Descripción</label><br/>
            <input type="textarea" name='descripcion' /><br/>
            <label>PVP</label><br/>
            <input type="text" name='pvp' size="25"/><br/>
            <input type="button" name="actualizar" value='Actualizar'/>
            <input type="button" name="cancelar" value='Cancelar'/>
            
        </form>
    </body>
</html>
