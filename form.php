<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Segunda via - Autosul Proteção Veícular</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Red+Hat+Display:400,400i,500,500i,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="assets/stylesheets/style.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="form-section">
			<h1 class="title text--white">Segunda via de Boleto</h1>
			<div class="form-section__content">
				<form action="email.php" method="post">
					<h3 class="subtitle text--blue text--thin text--small">Nome:</h3>
					<input class="input" type="text" name="Nome" size="35" />

					<br>

					<h3 class="subtitle text--blue text--thin text--small">E-mail:</h3>
					<input class="input" type="text" name="Email" size="35" />

					<br>

					<h3 class="subtitle text--blue text--thin text--small">CPF:</h3>
					<input class="input" type="text" name="Cpf" size="35" />

					<br>

					<h3 class="subtitle text--blue text--thin text--small">Quais boletos você quer que a gente te envie?</h3>
					<textarea class="input" name="Mensagem" rows="8" cols="40"></textarea>

					<br>
					<br>

					<button class="button button--green" type="submit" name="Enviar">Fazer Solicitação</button>

					<br>
					<br>
					<br>
					
				</form>
			</div>
		</div>
	</body>
</html>
