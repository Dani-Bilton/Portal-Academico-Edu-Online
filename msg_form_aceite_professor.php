<?php
ob_start();
session_start();
include_once 'config/Defs_Urls.php';
// $livros = $test->query("SELECT * FROM LIVRO");
// $tamanhoLivros = count($livros);
if ($_SESSION['mesagem_cadastro'] == "")
{
    session_write_close();
    header('location:'. URL_INDEX_PAGE);
    exit();
}
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/uikit/css/uikit.min.css">
<link rel="stylesheet" href="assets/index.css">
<link rel="stylesheet" href="assets/icongg.css">
<script src="assets/uikit/js/uikit.min.js"></script>
<script src="assets/uikit/js/uikit-icons.min.js"></script>
<title>Portal Edu</title>
</head>
<body>
	<div class="barrainformacao"
	style="background: linear-gradient(to right, #eb3349, #f45c43);">
		<div class="barrainformacaoConteudo">
			<p class="top">		
			</p>
		</div>
	</div>
	<nav class="uk-navbar-container banner" uk-navbar>
		<div class="uk-navbar-left">
			<a href="" class="uk-navbar-item uk-logo"> <i
				class="gg-home-alt line-icon"></i>
			</a>
			<ul class="uk-navbar-nav">
				<li class="uk-parent "><a href="<?php echo "index_professor.php" ?>">Portal Edu</a></li>
			</ul>
		</div>
	</nav>
	<div class="uk-section uk-section-primary uk-light"
		style="background-image: radial-gradient(circle farthest-corner at 10% 20%, rgba(0, 221, 214, 1) 0%, rgba(51, 102, 255, 1) 90%);">
		<div class="uk-container">
			<h3 style="text-align: center"> <?php echo $_SESSION['mesagem_cadastro'] ?></h3>
		</div>
	</div>
</body>
<?php $_SESSION['mesagem_cadastro'] = "" ?>
</html>