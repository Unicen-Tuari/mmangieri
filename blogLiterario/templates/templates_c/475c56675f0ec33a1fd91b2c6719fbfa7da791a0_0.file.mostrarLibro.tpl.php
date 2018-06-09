<?php
/* Smarty version 3.1.32, created on 2018-06-09 21:49:22
  from 'C:\xampp\htdocs\blog literario\templates\mostrarLibro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b1c2f428a7062_00898952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '475c56675f0ec33a1fd91b2c6719fbfa7da791a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blog literario\\templates\\mostrarLibro.tpl',
      1 => 1528573617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5b1c2f428a7062_00898952 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['libro']->value['titulo'];?>
</h1>
<h2><?php echo $_smarty_tpl->tpl_vars['libro']->value['genero'];?>
</h2>
<h3><?php echo $_smarty_tpl->tpl_vars['libro']->value['sinopsis'];?>
</h3>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
