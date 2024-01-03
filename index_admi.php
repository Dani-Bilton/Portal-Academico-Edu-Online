<?php
ob_start();
session_start();
/*include_once '../config/Database.php';
include_once '../config/Defs_Urls.php';
include_once '../config/instancia_dba.php';
// echo $_SESSION['perfilView'];
if ($_SESSION['perfilView'] == "false") {
    session_write_close();
    header("Location: ./" . URL_LIST_COMPROVATIVO, true);  
    // exit();
}*/
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
	<div 
		class="barrainformacao"
		style="background: linear-gradient(to right, #02aab0, #00cdac);">
		<div class="barrainformacaoConteudo" >
			<p class="top">	
			</p>
		</div>
	</div>
	<nav class="uk-navbar-container banner" uk-navbar>
		<div class="uk-navbar-left">
			<a href="<?php echo 'index_admi.php' ?>" class="uk-navbar-item uk-logo"> <i
				class="gg-home-alt line-icon"></i>
			</a>
			<ul class="uk-navbar-nav">
				<li class="uk-parent uk-active"><a href="">Portal de Gestão Admin</a></li>
			</ul>
		</div>
		<div class="uk-navbar-right">
			<ul class="uk-navbar-nav">
				<li class="uk-parent"><a href="config/auth_out.php" class="uk-icon-link"
					uk-icon="close"></a></li>
			</ul>
		</div>
	</nav>
	<div style="float: left; width: 21%; margin: 2%;">
		<div class="uk-width-1-1@s uk-width-2-1@m">
			<ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
				<li class=""><a href="#"></a></li>
				<li class="uk-active"><a href="<?php echo 'index_admi.php' ?>"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span>
						Page Inicial</a></li>
						<li class="uk-nav-header">Funcionalidades</li>
				<li class="uk-nav-divider"></li>
				<li class="uk-parent"><a href="#"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Usuarios</a>
					<ul class="uk-nav-sub">
					<li><a href="usuario.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Cadastrar</a></li>
					<li><a href="lista_usuario.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Listar</a></li>
					<li><a href="lista_alterar_usuario.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Actualizar</a></li>
					<li><a href="eliminar_usuario.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Remover</a></li>
					</ul>
				</li>
				<li class="uk-parent"><a href="#"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Curso</a>
					<ul class="uk-nav-sub">
						<li><a href="curso.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Cadastrar</a></li>
						<li><a href="lista_curso.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Listar</a></li>
						<li><a href="lista_alterar_curso.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Actualizar</a></li>
						<li><a href="eliminar_curso.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Remover</a></li>
					</ul>
				</li>
				<li class="uk-parent"><a href="#"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Programa</a>
					<ul class="uk-nav-sub">
					<li><a href="lista_programa.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Listar</a></li>
					</ul>
				</li>
				<li class="uk-parent"><a href="#"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Tarefa</a>
					<ul class="uk-nav-sub">
					<li><a href="lista_tarefa.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Listar</a></li>
					</ul>
				</li>
				<li class="uk-parent"><a href="#"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Actividades</a>
					<ul class="uk-nav-sub">
					<li><a href="atividade_formador.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Formadores</a></li>
					<li><a href="atividade_formando.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Formandos</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<div class="uk-section " style="padding-bottom: 3px;">
		<div class="uk-container">
			<?php if(isset($_SESSION['excluido']) && $_SESSION['excluido']!= "" ){ ?>
			<div class="uk-alert-danger" uk-alert>
				<a class="uk-alert-close" uk-close></a>
				<p><?php echo $_SESSION['excluido']; ?></p>
			</div>
			<?php $_SESSION['excluido'] = ""; } ?>
			<div class="uk-child-width-1-3@s uk-grid-match" uk-grid>
				<div>
					<div class="uk-card uk-card-default uk-card-small uk-card-body"
						style="background: linear-gradient(to right, #eb3349, #f45c43);">
						<h3 class="uk-card-title" style="color: white">Usuarios</h3>
						<h3 style="color: white"><?php echo "" ?> </h3>
					</div>
				</div>
				<div>
					<div class="uk-card uk-card-secondary uk-card-small uk-card-body"
						style="background: linear-gradient(to right, #02aab0, #00cdac);">
						<h3 class="uk-card-title" style="color: white">Cursos</h3>
						<h3 style="color: white"><?php echo ""  ?></h3>
					</div>
				</div>
				<div>
					<div class="uk-card uk-card-default uk-card-small uk-card-body"
						style="background: linear-gradient(to right, #f09819, #edde5d);">
						<h3 class="uk-card-title" style="color: white">Programas</h3>
						<h3 style="color: white"><?php echo ""  ?></h3>
					</div>
				</div>
			</div>
		</div>
	</div>



</body>


</html>