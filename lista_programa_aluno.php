<?php
session_start();
$curso = $_SESSION['nor1'];
include_once 'config/Database.php';
include_once 'config/Defs_Urls.php';
include_once 'config/instancia_dba.php';

$finalistas = $test->query("SELECT * FROM `programa` WHERE `id_prog_curso` = '$curso' ORDER BY `programa`.`descricao` ASC ");
$tamanhoLivros = count($finalistas);


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
		style="background: linear-gradient(to right, #eb3349, #f45c43);"
	>
		<div class="barrainformacaoConteudo">
			<p class="top">
				
			</p>
		</div>


	</div>

	<nav class="uk-navbar-container banner" uk-navbar>


		<div class="uk-navbar-left">

			<a href="<?php echo URL_ALUNO?>" class="uk-navbar-item uk-logo"> <i
				class="gg-home-alt line-icon"></i>
			</a>


			<ul class="uk-navbar-nav">
				<li class="uk-parent uk-active"><a href="<?php echo URL_ALUNO ?>" >Gestão Formando</a></li>

			</ul>


			



		</div>

		<div class="uk-navbar-right">

			

			<ul class="uk-navbar-nav">
				<li class="uk-parent"><a href="config/auth_out.php" class="uk-icon-link"
					uk-icon="close"></a></li>
			</ul>

		</div>


	</nav>


	<div class="uk-section " style="padding-bottom: 3px;">


		<div class="uk-container">
			<?php if(isset($_SESSION['excluido']) && $_SESSION['excluido']!= "" ){ ?>
			<div class="uk-alert-danger" uk-alert>
				<a class="uk-alert-close" uk-close></a>
				<p><?php echo $_SESSION['excluido']; ?></p>
			</div>
			<?php $_SESSION['excluido'] = ""; } ?>
			<h3 style="font-size: 2em;">Lista de Todos os Programas</h3>
			<div class="uk-grid-match uk-child-width-1-1@m" uk-grid>
				<div>
					<div class="uk-overflow-auto">
						<table
							class="uk-table uk-table-hover uk-table-middle uk-table-divider">
							<thead>
								<tr>
									<th class="uk-table-shrink">Num.</th>
									<th class="uk-table-shrink"></th>
									<th class="uk-table-shrink"></th>
									<th class="uk-table-shrink">Descrição</th>
									<th class="uk-table-shrink"></th>
									<th class="uk-table-shrink"></th>
									<th class="uk-table-shrink">Data da Publicação</th>
									<th class="uk-table-shrink"></th>
									<th class="uk-table-shrink"></th>
                                    <th class="uk-table-shrink">Data de Validade</th>
									<th class="uk-table-shrink"></th>
									<th class="uk-table-shrink"></th>
                                    <th class="uk-table-shrink">Tamanho</th>
									<th class="uk-table-shrink"></th>
									<th class="uk-table-shrink"></th>
                                    <th class="uk-table-shrink">Arquivo</th>
								</tr>
							</thead>
							<tbody>
							<?php

    for ($contador = 0; $contador < $tamanhoLivros; $contador ++) {
        ?>
                            
			<tr>
				<td class="uk-table-link"><?php echo $contador + 1;?></td>
				<th class="uk-table-shrink"></th>
            	<th class="uk-table-shrink"></th>
				<td class="uk-table-link"><?php echo $finalistas[$contador]['descricao'];?></td>
				<th class="uk-table-shrink"></th>
            	<th class="uk-table-shrink"></th>
				<td class="uk-table-link"><?php echo $finalistas[$contador]['data_desponibilidade'];?></td>
				<th class="uk-table-shrink"></th>
            	<th class="uk-table-shrink"></th>
				<td class="uk-table-link"><?php echo $finalistas[$contador]['data_expiracao'];?></td>
				<th class="uk-table-shrink"></th>
            	<th class="uk-table-shrink"></th>
				<td class="uk-table-link"><?php echo $finalistas[$contador]['tamanho'] / 1000 . "KB";?></td>
				<th class="uk-table-shrink"></th>
				<th class="uk-table-shrink"></th>
                <td class="uk-table-link"><?php echo $finalistas[$contador]['arquivo'];?></td>
                <td class="uk-table-link ">
				    <p uk-margin>
					    <a class="uk-button uk-button-danger" href="validar_programa_aluno.php?baixar=<?php echo $finalistas[$contador]['id_programa'];?>">Baixar</a>
				    </p>
				</td>					
			</tr>
		<?php
    }

    ?>
							</tbody>
						</table>
					</div>
				</div>


			</div>

		</div>

	</div>



</body>


</html>