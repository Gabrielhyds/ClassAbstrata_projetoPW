<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de Suco.</title>
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
							<h1>SUCO</h1>
							<p>Site criado em PHP, ultilizando POO, para cadastro de suco &#129475</p>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form method="post">
								<div class="form-group">
									<span class="form-label">Nome do Suco</span>
									<input class="form-control" type="text" name="nome" placeholder="Digite o nome do suco">
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
                                        <span class="form-label">Preço</span>
									<input class="form-control" type="number" name="preco" placeholder="preço">
								</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
                                        <span class="form-label">Sabor</span>
									<input class="form-control" type="text" name="sabor" placeholder="Sabor">
								</div>
									</div>
								</div>
								<div class="col-sm-6">
									<input type="submit" name="btn" value="Cadastrar" class="submit-btn" style="text-align:center;background-color:green">
								</div>
                                <div class="col-sm-6">
									<input type="submit" name="btnVoltar" value="Voltar" class="submit-btn" style="text-align:center;background-color:red;">
								</div><br><Br>
								<div >
									<?php
										require_once("ClasseSuco/Suco.php");
										require_once("AbstractClass/Bebida.php");

										$novoSuco = new Suco();
                                        
										if(isset($_POST['btnVoltar']))
                                            header('Location:index.php');
                                        elseif(isset($_POST['btn']))
										{   
											if($_POST['nome'] == "" || $_POST['sabor'] == "" || $_POST['preco'] == "")   
												echo "<Br><span style='color:red;'><b>
																PREENCHA OS CAMPOS CORRETAMENTE!</b>
															</span>";
											else
											{
												// Setando valores no objeto suco.
												$novoSuco->setNome($_POST['nome'])."<br/>";
												$novoSuco->setPreco($_POST['preco'])."<br/>";
												$novoSuco->setSabor( $_POST['sabor'])."<br/>";	
												
												// Invocando os métodos.
												$result1 = $novoSuco->mostrarBebida();
												$result2 = $novoSuco->verificarPreco($_POST['preco']);
												
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