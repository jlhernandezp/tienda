<?php
/* Smarty version 3.1.30, created on 2017-05-07 21:32:12
  from "C:\xampp\htdocs\tiendav1\smarty\listaProducto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590f763c360b16_89040770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6477b21447d38d4a2bea2cbf0daf17bb130c2fc8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendav1\\smarty\\listaProducto.tpl',
      1 => 1494185472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590f763c360b16_89040770 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>

<html>
    <head>
        <title>práctica de tienda página de productos </title>
        <meta charset="UTF-8">
        <link href="estilos/tienda.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id='contenedor'>
          
           
            <div id='productos'>
              <!--  <table >
                    <thead>
                        <tr>
                            <th></th>
                            <th>Código</th>
                            <th>Nombre</th>
                          <th>Descripción</th> 
                            <th>Precio</th>

                        </tr>
                    </thead>
                    <tbody> -->
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaProductos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
                <p>
                    <form action="productos.php" method="post">
                             <td><input type="hidden" name='cod' value='<?php echo $_smarty_tpl->tpl_vars['producto']->value->cod;?>
' />
                                 <input type="hidden" name='PVP' value='<?php echo $_smarty_tpl->tpl_vars['producto']->value->PVP;?>
' />
                                 <input type="submit" name="enviar" value="Añadir"/></td>
                                <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_corto;?>
: <?php echo $_smarty_tpl->tpl_vars['producto']->value->PVP;?>

                        </form>
                </p>
                   <!-- <tr>
                         <form action="productos.php" method="post">
                             <td><input type="hidden" name='cod' value='<?php echo $_smarty_tpl->tpl_vars['producto']->value->cod;?>
' />
                                 <input type="hidden" name='PVP' value='<?php echo $_smarty_tpl->tpl_vars['producto']->value->PVP;?>
' />
                                 <input type="submit" name="enviar" value="Añadir"/></td>
                             <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->cod;?>
</td> 
                             <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_corto;?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->PVP;?>
</td>
                        </form>
                    </tr> -->
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <!--    </tbody>
                </table>-->
            </div>
             <br class="divisor" />
              <div id="pie">
              <form action='logoff.php' method='post'>
                  <input type='submit' name='desconectar' value='Desconectar usuario <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
'/>
              </form>        
            </div>
        </div>
    </body>
</html><?php }
}
