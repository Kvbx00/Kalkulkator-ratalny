<?php
/* Smarty version 4.1.0, created on 2022-03-30 17:04:34
  from 'D:\xampp\htdocs\Jakub\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624471826ef697_42543721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b0a6bcb5920a938ffd93e75e50eac1b51892fec' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Jakub\\templates\\main.html',
      1 => 1648649635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624471826ef697_42543721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8" />
	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Kalkulator kredytowy" ?? null : $tmp);?>
</title>
	<link rel="stylesheet" href="/Jakub/app/style.css">
</head>

<body>

    <div style="width:90%; margin: 2em auto;">
		<a style="color: white;" href="<?php echo $_smarty_tpl->tpl_vars['root_path']->value;?>
/app/security/logout.php">Wyloguj</a>
	</div>

    <div class="login-box">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_599923442624471826ef0f6_84619370', 'content');
?>

    </div>

    
</body>

</html><?php }
/* {block 'content'} */
class Block_599923442624471826ef0f6_84619370 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_599923442624471826ef0f6_84619370',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
