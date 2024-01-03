<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Entrar no Sistema</title>
        <link rel="stylesheet" href="assets/uikit/css/uikit.min.css">
        <link rel="stylesheet" href="assets/index.css">
        <link rel="stylesheet" href="assets/icongg.css">
        <script src="assets/uikit/js/uikit.min.js"></script>
        <script src="assets/uikit/js/uikit-icons.min.js"></script>
    </head>
    <body>
    <div class="barrainformacao"
		style="background: linear-gradient(to right, #02aab0, #00cdac);"
		>
		<div class="barrainformacaoConteudo">
			<p class="top">
				
			</p>
		</div>
	</div>
	<nav class="uk-navbar-container banner" uk-navbar>
		<div class="uk-navbar-left">
			<a href="index.php" class="uk-navbar-item uk-logo"> <i
				class="gg-home-alt line-icon"></i>
			</a>
			<ul class="uk-navbar-nav">
				<li class="uk-parent"><a href="<?php echo 'index.php'; ?>">PORTAL EDU ONLINE</a></li>
</ul>
		</div>
		<div class="uk-navbar-right">
			<ul class="uk-navbar-nav">
				<li class="uk-parent"><a href="#sobre" class="uk-icon-link "
					uk-icon="info" uk-scroll></a></li>
			</ul>

			
		</div>


	</nav>

	<div class="uk-section uk-section-default">
		<div class="uk-container" style="margin-left: 28%;width: 52%;">

			<h3>Aceder ao Sistema</h3>
			
			
			
			<h5><span class="uk-text-danger"><?php  if (isset($_SESSION['erro_login'])) echo $_SESSION['erro_login']; ?></span></h5>

			
			<div class="uk-grid-match uk-child-width-1-1@m" uk-grid>
				<div>
					<form method="post" action="login1.php" uk-grid>
						<div class="uk-width-1-1">
							<div class="uk-margin">
								<label>Email</label>
							</div>

							<div class="uk-margin">
								<div class="uk-inline" style="width: 62%;">
									<span class="uk-form-icon" uk-icon="icon: user"></span> <input
										class="uk-input" type="text" name="email">
								</div>
							</div>
						</div>

						<div class="uk-width-1-1">
							<div class="uk-margin">
								<label>Senha</label>
							</div>

							<div class="uk-margin">
								<div class="uk-inline" style="width: 62%;">
									<span class="uk-form-icon uk-form-icon-flip"
										uk-icon="icon: lock"></span> <input class="uk-input"
										type="password" name="senha">
								</div>
							</div>
						</div>


						<div class="uk-width-1-1" style="width: 64%;">
							<p uk-margin style="text-align: center;">
								
								<input type="submit" class="uk-button uk-button-primary" value="Entrar"/>
								<button class="uk-button uk-button-default" type="reset">Limpar</button>
								
							</p>
						</div>




					</form>

				</div>


			</div>

		</div>
	</div>

	<div class="uk-section uk-section-primary uk-preserve-color" id="sobre"
		style="background-image: radial-gradient(circle farthest-corner at 10% 20%, rgba(0, 221, 214, 1) 0%, rgba(51, 102, 255, 1) 90%);">
		<div class="uk-container">

			<div class="uk-panel uk-light">
				<p style="text-align: center;">Portal Edu 2022</p>
			</div>


		</div>
	</div>



</body>
<?php  $_SESSION['erro_login'] = ""; ?>

</html>
