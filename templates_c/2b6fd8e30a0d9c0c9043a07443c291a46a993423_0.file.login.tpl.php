<?php
/* Smarty version 4.1.0, created on 2022-04-01 13:45:34
  from 'D:\xampp\htdocs\Kalkulkator-ratalny\app\views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6246e5de6afda4_30125615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b6fd8e30a0d9c0c9043a07443c291a46a993423' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Kalkulkator-ratalny\\app\\views\\login.tpl',
      1 => 1648813260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6246e5de6afda4_30125615 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9686718826246e5de6aa8d2_52986033', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_9686718826246e5de6aa8d2_52986033 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9686718826246e5de6aa8d2_52986033',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
			<h2>Logowanie</h2>
			<form>
				<div class="user-box">
					<input id="id_login" type="text" name="login"/>
					<label>Nazwa użytkownika</label>
				</div>
				<div class="user-box">
					<input id="id_pass" type="password" name="pass" />
					<label>Hasło</label>
				</div>
				<button class="noselect" type="submit" value="zaloguj"></button>
			</form>


<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
