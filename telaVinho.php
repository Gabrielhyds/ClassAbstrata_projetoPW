<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de Vinho.</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="css/style2.css" />
</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>VINHO</h1>
							<p>Site criado em PHP, ultilizando POO, para cadastro de vinho &#127863</p>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form method="post">
								<div class="form-group">
									<span class="form-label">Nome do vinho</span>
									<input class="form-control" type="text" name="nome"
										placeholder="Digite o nome do vinho">
								</div>
								<div class="form-group">
									<span class="form-label">Tipo do vinho</span>
									<input class="form-control" type="text" name="tipo"
										placeholder="Digite o tipo do vinho">
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Preço</span>
											<input class="form-control" type="number" name="preco" step="0.01" min="0"
												placeholder="Preço do vinho">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Safra</span>
											<input class="form-control" type="number" name="safra"
												placeholder="Safra do vinho">
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-btn">
										<input type="submit" name="btn" value="Cadastrar" class="submit-btn"
											style="text-align:center;background-color:wine;">
									</div>
								</div>
								<div>
									<input type="submit" name="btnVoltar" value="Voltar" class="submit-btn"
										style="text-align:center;background-color:red;"><br>
								</div><br>
								<div>
									<?php
										require_once("ClasseVinho/Vinho.php");
										require_once("AbstractClass/Bebida.php");

										$novoVinho = new Vinho();
										
										if(isset($_POST['btnVoltar']))
											header('Location:telaIndex.php');
										else if(isset($_POST['btn']))
										{   
											
											if($_POST['nome'] == "" || $_POST['tipo'] == "" || $_POST['preco'] == ""  || $_POST['safra'] == "")   
												echo "<br/><span style='color:red;'><b>
															PREENCHA OS CAMPOS CORRETAMENTE!</b>
														</span>";
											else
											{
												// Setando  valores no objeto Vinho. 
												$novoVinho->setNome($_POST['nome'])."<br/>";
												$novoVinho->setTipo($_POST['tipo'])."<br/>";
												$novoVinho->setPreco($_POST['preco'])."<br/>";
												$novoVinho->setSafra( $_POST['safra'])."<br/>";
												
												// Invocando os métodos.
												$result1 = $novoVinho->mostrarBebida();
												$result2 = $novoVinho->verificarPreco($_POST['preco']);
												
												// Imprimir na tela.
												echo $result1.$result2;
											}
										}
									?>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>