<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8" />
	<title>Logowanie</title>
	<link rel="stylesheet" href="/Kalkulkator-ratalny/app/style.css">
</head>

<body>

	<form action="{$conf->app_url}/app/security/login.php" method="post">
		<div class="login-box">
			<h2>Logowanie</h2>
			<form>
				<div class="user-box">
					<input id="id_login" type="text" name="login" required="" value="<?php out($form['login']); ?>" />
					<label>Nazwa użytkownika</label>
				</div>
				<div class="user-box">
					<input id="id_pass" type="password" name="pass" required="" />
					<label>Hasło</label>
				</div>
				<button class="noselect" type="submit" value="zaloguj"></button>
			</form>

			<?php
			//wyświeltenie listy błędów, jeśli istnieją
			if (isset($messages)) {
				if (count($messages) > 0) {
					echo '<div style="background-color: #a4b5bd; border-radius: 15px; width: 280px; padding: 20px; margin-top: 40px; line-height: 30px;">';
					foreach ($messages as $key => $msg) {
						echo $msg;
					}
					echo '</div>';
				}
			}
			?>
		</div>



</body>

</html>