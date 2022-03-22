<?php
	require_once("/xampp/htdocs/Gabriel_silva/ClassRefrigerante/Refrigerante.php");
	require_once("/xampp/htdocs/Gabriel_silva/AbstractClass/Bebida.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PROJETO PW III</title>
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
							<p>Um pequeno e simples site criado em PHP,ultilizando Programação Orientada a Objetos (POO),para cadastro de refrigerante,então aproveite e venha cadastrar o seu &#128521</p>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form method="post">
								<div class="form-group">
									<span class="form-label">Nome do refrigerante</span>
									<input class="form-control" type="text" name="nome" placeholder="Digite o nome do refrigerante">
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
                                        <span class="form-label">Retornavel</span>
									<input class="form-control" type="text" name="retornavel" placeholder="Retornavel">
								</div>
									</div>
								</div>
								<div class="col-sm-6">
									<input type="submit" name="btn" value="Cadastrar" class="submit-btn" style="text-align:center;background-color:green">
								</div>
								<div>
									<input type="submit" name="btnVoltar" value="Voltar" class="submit-btn" style="text-align:center;background-color:red;">
									<br>
								</div>
								<div>
									<?php
										$cad = new Refrigerante();
										if(isset($_POST['btnVoltar'])){
											header('Location:index.php');
										}else if(isset($_POST['btn'])){   
											if($_POST['nome'] == "" ||  $_POST['preco'] == ""  || $_POST['retornavel'] == ""  ){   
												echo  "<br/><span style='color:red;'><b>PREENCHA OS CAMPOS CORRETAMENTE!</b></span>";
											}else{
												$cad->setNome($_POST['nome'])."<br/>";
												$cad->setPreco($_POST['preco'])."<br/>";
                                                $cad->setRetornavel($_POST['retornavel'])."<br/>";
												$result1 = $cad->mostrarBebida();
												$result2 = $cad->verificaPreco($_POST['preco']);
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