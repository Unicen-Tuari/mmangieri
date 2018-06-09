<?php
/* Smarty version 3.1.32, created on 2018-06-09 21:50:34
  from 'C:\xampp\htdocs\blog literario\templates\mostrarAutores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b1c2f8ac06979_66663329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d350e526817a412bf8a3ccc50292d5c146efb07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blog literario\\templates\\mostrarAutores.tpl',
      1 => 1528573830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5b1c2f8ac06979_66663329 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Autores</h1>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autores']->value, 'autor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['autor']->value) {
?>
    <li><?php echo $_smarty_tpl->tpl_vars['autor']->value['nombre'];?>
 
    </li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
