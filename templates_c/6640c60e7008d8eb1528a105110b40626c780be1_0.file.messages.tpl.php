<?php
/* Smarty version 4.1.0, created on 2022-04-02 15:11:33
  from 'D:\xampp\htdocs\Kalkulkator-ratalny\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62484b85c67ef2_75279757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6640c60e7008d8eb1528a105110b40626c780be1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Kalkulkator-ratalny\\app\\views\\templates\\messages.tpl',
      1 => 1648905090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62484b85c67ef2_75279757 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?>
    <div style="background-color: #a4b5bd; border-radius: 15px; width: 280px; padding: 20px; margin-top: 40px; line-height: 30px;">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
		<?php echo $_smarty_tpl->tpl_vars['err']->value;?>
 <br>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['messages']->value->isInfo()) {?>
    <div style="background-color: #a4b5bd; border-radius: 15px; width: 280px; padding: 20px; margin-top: 40px; line-height: 30px;">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
		<?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
 </br>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
}
