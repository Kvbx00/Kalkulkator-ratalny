<?php
/* Smarty version 4.1.0, created on 2022-04-02 15:08:31
  from 'D:\xampp\htdocs\Kalkulkator-ratalny\app\views\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62484acf829c32_89489156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '854e2584e6e9eab03e8afe17efac7d97610de645' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Kalkulkator-ratalny\\app\\views\\calc.tpl',
      1 => 1648904895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_62484acf829c32_89489156 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64722156462484acf8210b9_52280552', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_64722156462484acf8210b9_52280552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_64722156462484acf8210b9_52280552',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post">

			<h2>Kalkulator kredytowy</h2>
			<form>
				<div class="user-box">
					<input id="id_capital" type="text" name="capital" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->capital;?>
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
					<input id="id_interest" type="text" name="interest" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->interest;?>
" /><br />
					<label>Wpisz oprocentowanie, bez znaku "%":</label>
				</div>
				<button class="button-count" type="submit" value="Oblicz"></button>

				<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
					<div style="background-color: #a4b5bd; border-radius: 15px; width: 280px; padding: 20px; margin-top: 40px; line-height: 30px;">
						Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

					</div>
                <?php }?>

			</form>

	</form>

	<a href ="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a></br>

    <div style="font-size: 12px; color: white;">
	    Użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>

	</div>

<?php
}
}
/* {/block 'content'} */
}
