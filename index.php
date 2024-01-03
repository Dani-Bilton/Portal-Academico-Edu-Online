<?php
include_once 'config/Defs_Urls.php';
include_once 'config/Database.php';
session_start();
include_once 'config/auth.php';
include_once 'config/instancia_dba.php';


// $livros = $test->query("SELECT * FROM LIVRO");
// $tamanhoLivros = count($livros);

#$frases = $test->query("SELECT * FROM crm_frases where id_pensamento = 1");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/uikit/css/uikit.min.css">
<link rel="stylesheet" href="assets/index.css">
<link rel="stylesheet" href="assets/icongg.css">

<script src="assets/uikit/js/uikit.min.js"></script>
<script src="assets/uikit/js/uikit-icons.min.js"></script>
<title>Portal Académico Edu Online</title>

</head>
<style>
.headline:after {
	content: '|';
	margin-left: 5px;
	opacity: 1;
	animation: flash .7s infinite;
}

@keyframes flash { 0%, 100%{
	opacity: 1;
}
50%{
opacity




:


 


0;
}
}
</style>



<body>

	<div class="barrainformacao"
		style="background: linear-gradient(to right, #02aab0, #00cdac);"
	>
		<div class="barrainformacaoConteudo">
			<p class="top">
				<span > </span> 
			</p>
		</div>


	</div>

	<nav class="uk-navbar-container banner" uk-navbar>

		<div class="uk-navbar-left">

			<a href="" class="uk-navbar-item uk-logo"> <i
				class="gg-home-alt line-icon"></i>
			</a>

			<ul class="uk-navbar-nav">
				<li class="uk-parent uk-active"><a href="#">PORTAL EDU Online</a></li>

			</ul>

			
			
			


			<!-- <ul class="uk-navbar-nav">
				<li class="uk-parent"><a href="<?php #echo URL_FORMULARIO_PAGE; ?>">
						<span uk-icon="calendar"> </span> Eventos
				</a></li>

			</ul> -->


		</div>

		<div class="uk-navbar-right">
			<ul class="uk-navbar-nav">
				<li class="uk-parent"><a href="<?php echo "" . URL_SOBRE_PAGE; ?>" 
				class="uk-icon-link " uk-icon="info" uk-scroll></a></li>
			</ul>

			<ul class="uk-navbar-nav">
				<li class="uk-parent"><a href="<?php echo "" . URL_LOGIN_PAGE; ?>"
					class="uk-icon-link" uk-icon="user"></a></li>
			</ul>

		</div>


	</nav>

	<div class="uk-section uk-light">

	
		<div class="uk-container">
			
			
		<div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
   
    
    <div>
        <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
            <h3 class="uk-card-title">Faça Downloads</h3>
            <p>Alunos podem descarrgar as matérias</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-secondary uk-card-hover uk-card-body uk-light">
            <h3 class="uk-card-title">Crie Programas para os Professores</h3>
            <p>Programas para os professores</p>
        </div>
    </div>
</div>


		</div>
	</div>



	<div class="uuk-section uk-section-secondary uk-light"
		style="padding: 4%;">
		<div class="uk-container">

			<div class="uk-child-width-expand@s" uk-grid>

				<div>
					<h4>Blog</h4>
					<ul class="uk-list uk-list-disc">
						<li>Redes sócias</li>
						
					</ul>
				</div>

				<div>
					<h4>Novidades</h4>
					<ul class="uk-list uk-list-circle">
						<li>Eventos</li>
						<li>Parcerias</li>
					</ul>
				</div>

				<div>
					<h4>Contacto</h4>
					<ul class="uk-list uk-list-square">
						<li>Telefone : 942145345</li>
						<li>Email: softfile@gmail.co.ao</li>
					</ul>
				</div>

			</div>
		</div>
	</div>




</body>

<script src="tools/canvasjs.min.js"></script>

<script type="text/javascript">
function typeWrite(e) {
    const textoArray = e.innerHTML.split('');
    e.innerHTML = ' ';
    textoArray.forEach(function (letter, i) {
        setTimeout(function () {
            e.innerHTML += letter;
        }, 80 * i);
    });
	return true;
}

const phrase = document.querySelector('.headline');
typeWrite(phrase);



</script>

</html>
