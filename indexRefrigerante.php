<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de Refrigerante.</title>
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style2.css" />
</head>
<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>REFRIGERANTE</h1>
							<p>Site criado em PHP, ultilizando POO, para cadastro de refrigerantes &#129380</p>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form method="post">
								<div class="form-group">
									<span class="form-label">Nome do Refrigerante</span>
									<input class="form-control" type="text" name="nome" placeholder="Digite o nome do Refrigerante">
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
                                        <span class="form-label">Preço</span>
									<input class="form-control" type="number" name="preco" placeholder="Preço">
								</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
                                        <span class="form-label">Retornável</span>
									<input class="form-control" type="text" name="retornavel" placeholder="Retornável">
								</div>
									</div>
								</div>
								<div class="col-sm-6">
									<input type="submit" name="btn" value="Cadastrar" class="submit-btn" style="text-align:center;background-color:black">
								</div>
								<div>
									<input type="submit" name="btnVoltar" value="Voltar" class="submit-btn" style="text-align:center;background-color:red;">
									<br>
								</div>
								<div>
									<?php
										require_once("ClasseRefrigerante/Refrigerante.php");
										require_once("AbstractClass/Bebida.php");

										$novoRefrigerante = new Refrigerante();
										
										if(isset($_POST['btnVoltar']))
											header('Location:index.php');
										else if(isset($_POST['btn']))
										{   
											if($_POST['nome'] == "" ||  $_POST['preco'] == ""  || $_POST['retornavel'] == "" )   
												echo  "<br/><span style='color:red;'><b>
																PREENCHA OS CAMPOS CORRETAMENTE!</b>
															</span>";
											else
											{
												// Setando valores no objeto refrigerante.
												$novoRefrigerante->setNome($_POST['nome'])."<br/>";
												$novoRefrigerante->setPreco($_POST['preco'])."<br/>";
                                                $novoRefrigerante->setRetornavel($_POST['retornavel'])."<br/>";
												
												// Invocando os métodos.
												$result1 = $novoRefrigerante->mostrarBebida();
												$result2 = $novoRefrigerante->verificarPreco($_POST['preco']);
												
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