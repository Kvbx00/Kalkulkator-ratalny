<?php
/* Smarty version 4.1.0, created on 2022-03-30 19:05:07
  from 'D:\xampp\htdocs\Kalkulkator-ratalny\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62448dc3ee1b22_00074090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '262658f32a628cf65146f83e18f6a2075425d96d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Kalkulkator-ratalny\\app\\calc.html',
      1 => 1648659438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62448dc3ee1b22_00074090 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193452739262448dc3ed6bb6_84049782', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'content'} */
class Block_193452739262448dc3ed6bb6_84049782 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_193452739262448dc3ed6bb6_84049782',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">

			<h2>Kalkulator kredytowy</h2>
			<form>
				<div class="user-box">
					<input id="id_capital" type="text" name="capital" required="" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->capital;?>
" /><br />
					<label>Podaj kwotę kredytu:</label>
				</div>
				<div class="user-box">
					<label>Wybierz okres spłaty kredytu:</label>
					<input readonly />
					<div class="select">
						<select name="op">
							<option value="1">Rok</option>
							<option value="2">Dwa lata</option>
							<option value="3">Trzy lata</option>
							<option value="4">Cztery lata</option>
							<option value="5">Pięć lat</option>
						</select>
					</div></br>
				</div>
				<div class="user-box">
					<input id="id_interest" type="text" name="interest" required="" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->interest;?>
" /><br />
					<label>Wpisz oprocentowanie, bez znaku "%":</label>
				</div>
				<button class="noselect" type="submit" value="Oblicz"></button>

				<?php if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?> 
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
				Informacje:</br>
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
				<?php }?>

				<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
					<div style="background-color: #a4b5bd; border-radius: 15px; width: 280px; padding: 20px; margin-top: 40px; line-height: 30px;">
						Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

					</div>
                <?php }?>

			</form>

	</form>
<?php
}
}
/* {/block 'content'} */
}
