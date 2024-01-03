<?php
ob_start();
session_start();
include_once 'config/Database.php';
include_once 'config/Defs_Urls.php';
/*include_once 'config/instancia_dba.php';
 echo $_SESSION['perfilView'];
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
<title>Cadastrar Usuario - Portal Edu Online</title>
</head>
<body>
	<div 
		class="barrainformacao" style="background: linear-gradient(to right, #eb3349, #f45c43);">
		<div class="barrainformacaoConteudo" >
			<p class="top">
				
			</p>
		</div>
	</div>

	<nav class="uk-navbar-container banner" uk-navbar>
		<div class="uk-navbar-left">
			<a href="<?php echo URL_ADMIN ?>" class="uk-navbar-item uk-logo"> <i
				class="gg-home-alt line-icon"></i>
			</a>
				<ul class="uk-navbar-nav">
					<li class="uk-parent uk-active"><a href="<?php echo URL_ADMIN ?>">Portal de Gestão Admin</a></li>
				</ul>
		</div>
		<div class="uk-navbar-right">
			<ul class="uk-navbar-nav">
				<li class="uk-parent"><a href="../config/auth_out.php" class="uk-icon-link"
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
					<li><a href=""><span class="lista_programa.php" uk-icon="icon: file-text"></span>Listar</a></li>
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
	</div>	<div class="uk-section " style="padding-bottom: 3px;">
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
						<h3 class="uk-card-title" style="color: white">Formulario de Cadastro de Usuario</h3>
						<h3 style="color: white"><?php echo "" ?> </h3>
					</div>
				</div>
				<div>
							<div class="uk-section " style="color: black;font-size: 1.2em;">
						<div class="uk-container">
							<div class="uk-grid-match uk-child-width-1-1@m" uk-grid>
								<div>
									<form action="validar_usuario.php" method="post">
										<fieldset class="uk-fieldset" uk-grid>
											<legend class="uk-legend"></legend>
											<div class="uk-width-1-2">
												<div class="uk-margin">
													<label>Nome Completo</label>
												</div>
												<div class="uk-margin">
													<input class="uk-input" type="text" placeholder="Escreva aqui o Nome Completo"
														name="nome_completo" required="required">
												</div>
											</div>
                                            <div class="uk-width-1-2">
												<div class="uk-margin">
													<label>E-mail</label>
												</div>
												<div class="uk-margin">
													<input class="uk-input" type="text" placeholder="Escreva aqui o Nome Completo"
														name="email" required="required">
												</div>
											</div>
											<div class="uk-width-1-2">
												<div class="uk-margin">
													<label>Data Nascimento</label>
												</div>
												<div class="uk-margin">
													<input class="uk-input" type="date" placeholder="Escreva aqui a Data de Nascimento"
														name="data_nascimento" required="required">
												</div>
											</div>
											<div class="uk-width-1-2">
												<div class="uk-margin">
													<label>Bilhete de Identidade</label>
												</div>
												<div class="uk-margin">
													<input class="uk-input" type="text" placeholder="Escreva aqui o Bilhete de Identidade" name="numero_bi" required="required">
												</div>
											</div>
                                            <div class="uk-width-1-2">
												<div class="uk-margin">
													<label>Sexo</label>
												</div>
												<div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
													<label><input class="uk-radio" type="radio"
														name="radio_sexo" value="M" checked> Masculino</label>
													<label><input class="uk-radio" type="radio"
														name="radio_sexo" value="F"> Feminino</label>
												</div>
											</div>
                                            <div class="uk-width-1-2">
												<div class="uk-margin">
													<label>Senha</label>
												</div>
												<div class="uk-margin">
													<input class="uk-input" type="text"
														placeholder="Escreva aqui a Senha" name="senha" required="required">
												</div>
											</div>
                                            <div class="uk-width-1-2">
												<div class="uk-margin">
													<label>Tipo</label>
												</div>
                                                <div class="uk-margin">
                                                    <select name="tipo" class="uk-input">         
                                                        <option >Selecione</option>
                                                        <option value="1">Administrador</option>
                                                        <option value="0">Formador</option>
                                                        <option value="2">Formando</option>
                                                    </select>
												</div>
											</div>
                                            <div class="uk-width-1-2">
												<div class="uk-margin">
													<label>Morada</label>
												</div>
												<div class="uk-margin">
													<input class="uk-input" type="text" placeholder="Escreva aqui a Morada" name="texto_morada">
												</div>
											</div>
											<div class="uk-width-1-2">
												<div class="uk-margin">
													<label>Grau</label>
												</div>
												<div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
													<label><input class="uk-radio" type="radio"
														name="radio_grau" value="Médio" checked> Médio</label>
													<label><input class="uk-radio" type="radio"
														name="radio_grau" value="Licenciado"> Licenciado</label> 
														<label><input class="uk-radio" type="radio"
														name="radio_grau" value="Outro"> Outro</label> 
												</div>
											</div>
											<div class="uk-width-1-2">
												<div class="uk-margin">
													<label>Contacto</label>
												</div>
												<div class="uk-margin">
													<input class="uk-input" type="text" placeholder="Escreva aqui o Contacto"
														name="texto_contacto">
												</div>
                                            <div class="uk-width-1-2">
												<div class="uk-margin">
													<label>Curso</label>
												</div>
												<div class="uk-margin">
												<select name="curso" class="uk-input" >
                        							<option>Selecione</option>
                        							<?php
                        								$sname = "localhost";
														$uname= "root";
														$password = "";
														$db_name = "bd_final";
														$conn= mysqli_connect($sname, $uname, $password, $db_name);
                        								if(!$conn){
															echo "Conexão falhou";
  														 }
														$curso = "SELECT * From curso";
                        								$curso1 = mysqli_query($conn, $curso);
                        								while($lista_curso = mysqli_fetch_assoc($curso1)){ ?>
                        									<option value="<?php echo $lista_curso ['id_curso']; ?>"> <?php echo $lista_curso ['descricao']; ?>
                        									</option> <?php 
                        								}
                        							?>
                    							</select>
												</div>
											</div>
											<div class="uk-width-1-1">
												<p uk-margin style="text-align: center;">
													<button class="uk-button uk-button-primary"
														style="border-radius: 135px;" >
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
