<?php
/* Smarty version 4.1.0, created on 2022-03-30 19:05:08
  from 'D:\xampp\htdocs\Kalkulkator-ratalny\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62448dc400bd40_95841333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59cb1e2441966a33f0ad1c2abdb89babea92a6ce' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Kalkulkator-ratalny\\templates\\main.html',
      1 => 1648659845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62448dc400bd40_95841333 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8" />
	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Kalkulator kredytowy" ?? null : $tmp);?>
</title>
	<link rel="stylesheet" href="/Kalkulkator-ratalny/app/style.css">
</head>

<body>

    <div style="width:90%; margin: 2em auto;">
		<a style="color: white;" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/security/logout.php">Wyloguj</a>
	</div>

    <div class="login-box">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197132391762448dc400b7b4_65540088', 'content');
?>

    </div>

    
</body>

</html><?php }
/* {block 'content'} */
class Block_197132391762448dc400b7b4_65540088 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_197132391762448dc400b7b4_65540088',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
