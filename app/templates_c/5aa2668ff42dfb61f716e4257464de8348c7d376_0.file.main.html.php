<?php
/* Smarty version 4.1.0, created on 2022-03-30 18:27:13
  from 'D:\xampp\htdocs\Jakub\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624484e1400d80_19199759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5aa2668ff42dfb61f716e4257464de8348c7d376' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Jakub\\templates\\main.html',
      1 => 1648657630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624484e1400d80_19199759 (Smarty_Internal_Template $_smarty_tpl) {
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
		<a style="color: white;" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/security/logout.php">Wyloguj</a>
	</div>

    <div class="login-box">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131903549624484e14006b8_25742068', 'content');
?>

    </div>

    
</body>

</html><?php }
/* {block 'content'} */
class Block_131903549624484e14006b8_25742068 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_131903549624484e14006b8_25742068',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
