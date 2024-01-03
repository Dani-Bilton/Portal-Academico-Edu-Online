<?php
ob_start();
session_start();
include_once 'config/Database.php';
include_once 'config/Defs_Urls.php';
include_once 'config/instancia_dba.php';
/*echo $_SESSION['perfilView'];
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
<title>Cadastrar - Portal Edu</title>
</head>
<body>
	<div class="barrainformacao" style="background: linear-gradient(to right, #eb3349, #f45c43);">
		<div class="barrainformacaoConteudo" >
			<p class="top">	
			</p>
		</div>
</div>
	<nav class="uk-navbar-container banner" uk-navbar>
		<div class="uk-navbar-left">
			<a href="<?php echo URL_PROFESSOR ?>" class="uk-navbar-item uk-logo"> <i
				class="gg-home-alt line-icon"></i>
			</a>
			<ul class="uk-navbar-nav">
				<li class="uk-parent uk-active"><a href="<?php echo URL_PROFESSOR ?>">Portal de Gestão Formador</a></li>
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
				<li class="uk-active"><a href="<?php echo 'index_professor.php' ?>"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span> Page Inicial</a></li>
						<li class="uk-nav-header">Funcionalidades</li>
				<li class="uk-nav-divider"></li>
				<li class="uk-parent"><a href="#"><span
						class="uk-margin-small-right" uk-icon="icon: file-text"></span>Minha conta</a>
					<ul class="uk-nav-sub">
					<li><a href="minha_conta_professor.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Listar</a></li>
					<li><a href="lista_alterar_usuario_professor.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Actualizar</a></li>
					</ul>
				</li>
				<li class="uk-parent"><a href="#"><span class="#" uk-icon="icon: file-text"></span>Curso</a>
					<ul class="uk-nav-sub">
					<li><a href="lista_curso_professor.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Listar</a></li>
					<li><a href="lista_formando.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Formandos</a></li>
					</ul>
				</li>
				<li class="uk-parent"><a href="#"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Programa</a>
					<ul class="uk-nav-sub">
                    	<li><a href="programa.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Cadastrar</a></li>
						<li><a href="lista_programa_professor.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Listar</a></li>
						<li><a href="lista_alterar_programa.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Actualizar</a></li>
                    	<li><a href="eliminar_programa.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Remover</a></li>
					</ul>
				</li>
				<li class="uk-parent"><a href="#"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Tarefa</a>
					<ul class="uk-nav-sub">
						<li><a href="lista_tarefa_professor.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Listar</a></li>
					</ul>
				</li>
				<li class="uk-margin-small-right"><a href="http://localhost:81/chat1/login.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Chat</a></li>
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
			<div class="uk-child-width-1-1@s uk-grid-match" uk-grid>
				<div>
					<div class="uk-card uk-card-default uk-card-small uk-card-body"
						style="background: linear-gradient(to right, #eb3349, #f45c43);">
						<h3 class="uk-card-title" style="color: white">Formulario de Cadastro de Programa</h3>
						<h3 style="color: white"><?php echo "" ?> </h3>
					</div>
				</div>
				<div>
							<div class="uk-section " style="color: black;font-size: 1.2em;">
						<div class="uk-container">
							<div class="uk-grid-match uk-child-width-1-1@m" uk-grid>
								<div>
									<form method="post" enctype = "multipart/form-data" name="upload" action="validar_programa.php">
										<fieldset class="uk-fieldset" uk-grid>
											<legend class="uk-legend"></legend>
											<div class="uk-width-1-2">
												<div class="uk-margin">
													<label>Título da Matéria</label>
												</div>
												<div class="uk-margin">
													<input class="uk-input" type="text" placeholder="Título da Matéria"
														name="descricao" required="required">
												</div>
											</div>
											<div class="uk-width-1-2">
												<div class="uk-margin">
													<label>Data de Publicação</label>
												</div>
												<div class="uk-margin">
													<input class="uk-input" type="date" placeholder=""
														name="publicacao" required="required">
												</div>
											</div>
											<div class="uk-width-1-2">
												<div class="uk-margin">
													<label>Data de Expiração</label>
												</div>
												<div class="uk-margin">
													<input class="uk-input" type="date"
														placeholder="" name="expiracao" required="required">
												</div>
											</div>
											<div class="uk-width-1-2">
												<div class="uk-margin">
													<label>Arquivo</label>
												</div>
												<div class="uk-margin">
													<input class="uk-input" type="file" placeholder="Fim do Curso" name="arquivo1" required="required">
												</div>
											</div>
											<div class="uk-width-1-1">
												<p uk-margin style="text-align: center;">
													<button class="uk-button uk-button-primary"
														style="border-radius: 135px;" name="submit">
														<span class="" uk-icon="check"></span> Submeter
													</button>
												</p>
											</div>
										</fieldset>
									</form>
								</div>
							</div>
						</div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
