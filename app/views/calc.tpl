{extends file="main.tpl"}



{block name=content}

	<form action="{$conf->action_url}calcCompute" method="post">

			<h2>Kalkulator kredytowy</h2>
			<form>
				<div class="user-box">
					<input id="id_capital" type="text" name="capital" value="{$form->capital}" /><br />
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
					<input id="id_interest" type="text" name="interest" value="{$form->interest}" /><br />
					<label>Wpisz oprocentowanie, bez znaku "%":</label>
				</div>
				<button class="button-count" type="submit" value="Oblicz"></button>

				{include file='messages.tpl'}

				{if isset($res->result)}
					<div style="background-color: #a4b5bd; border-radius: 15px; width: 280px; padding: 20px; margin-top: 40px; line-height: 30px;">
						Wynik: {$res->result}
					</div>
                {/if}

			</form>

	</form>

	<a href ="{$conf->action_url}logout">Wyloguj</a></br>

    <div style="font-size: 12px; color: white;">
	    Użytkownik: {$user->login}, rola: {$user->role}
	</div>

{/block}