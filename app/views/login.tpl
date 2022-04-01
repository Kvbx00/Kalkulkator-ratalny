{extends file="main.tpl"}

{block name=content}
	<form action="{$conf->action_url}login" method="post">
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


{include file='messages.tpl'}

{/block}