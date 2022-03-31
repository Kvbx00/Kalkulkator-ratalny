<?php
/* Smarty version 4.1.0, created on 2022-03-31 17:32:02
  from 'D:\xampp\htdocs\Kalkulkator-ratalny\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6245c9721a3071_68128570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd369333a7f05c3b9e76b16eafb43f95e517e312' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Kalkulkator-ratalny\\app\\views\\templates\\main.tpl',
      1 => 1648740514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6245c9721a3071_68128570 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10805662336245c9721a2ac1_46481619', 'content');
?>

    </div>

</body>

</html><?php }
/* {block 'content'} */
class Block_10805662336245c9721a2ac1_46481619 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10805662336245c9721a2ac1_46481619',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
