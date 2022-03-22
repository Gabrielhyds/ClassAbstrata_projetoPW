<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de Vinho.</title>
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
							<h1>VINHO</h1><!--tag cabeçalho-->
							<p>Site criado em PHP, ultilizando POO, para cadastro de vinho &#127863</p><!--Paragrafo-->
						</div><!--div class='booking-cta' -->
					</div><!--div class='col-md-7 col-md-push-5'-->
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form method="post">
								<div class="form-group">
									<span class="form-label">Nome do vinho</span><!--label-->
									<input class="form-control" type="text" name="nome" placeholder="Digite o nome do vinho"><!--Input type='txt' NOME-->
								</div><!--div form-group-->
                                <div class="form-group">
									<span class="form-label">Tipo do vinho</span><!--label-->
									<input class="form-control" type="text" name="tipo" placeholder="Digite o tipo do vinho"><!--Input type='txt' TIPO-->
								</div><!--div form-group-->
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
                                        <span class="form-label">Preço</span><!--label-->
									<input class="form-control" type="number" name="preco" placeholder="preço do vinho"><!--Input type='number' PRECO-->
								</div><!-- div row -->
									</div><!-- div col-sm-6 -->
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Safra</span><!-- label -->
											<input class="form-control" type="number" name="safra" placeholder="Safra do vinho"><!--Input type='number' SAFRA-->
										</div><!-- form-group-->
									</div><!--div col-sm-6 -->
								</div>
								<div class="col-sm-6">
									<div class="form-btn">
										<input type="submit" name="btn" value="Cadastrar" class="submit-btn" style="text-align:center;background-color:wine;"><!--Input type='subtmit' novoVinhoASTRAR-->
									</div><!--div form-group-->
								</div><!--div col-sm-6 -->
								<div>
									<input type="submit" name="btnVoltar" value="Voltar" class="submit-btn" style="text-align:center;background-color:red;"><!--Input type='submit' VOLTAR--><br>
								</div><br><!--div input[button]-->
								<div>
									<?php
										require_once("ClasseVinho/Vinho.php");
										require_once("AbstractClass/Bebida.php");

										$novoVinho = new Vinho();
										
										if(isset($_POST['btnVoltar']))
											header('Location:index.php');
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
								</div><!--div php-->
							</form><!--form-->
						</div><!--div class='booking-form'-->
					</div><!--div class='col-md-4 col-md-pull-7'-->
				</div><!--div class='row'-->
			</div><!--div class=''-->
		</div><!--div class='container'-->
	</div><!--div class='section'-->
</body>
</html>