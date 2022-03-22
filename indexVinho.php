<?php
	require_once("/xampp/htdocs/Gabriel_silva/ClassVinho/Vinho.php");
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
							<h1>VINHO</h1><!--tag cabeçalho-->
							<p>Um pequeno e simples site criado em PHP,ultilizando Programação Orientada a Objetos (POO),para cadastro de vinho,então aproveite e venha cadastrar o seu &#128521</p><!--Paragrafo-->
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
										<input type="submit" name="btn" value="Cadastrar" class="submit-btn" style="text-align:center;background-color:green;"><!--Input type='subtmit' CADASTRAR-->
									</div><!--div form-group-->
								</div><!--div col-sm-6 -->
								<div>
									<input type="submit" name="btnVoltar" value="Voltar" class="submit-btn" style="text-align:center;background-color:red;"><!--Input type='submit' VOLTAR--><br>
								</div><br><!--div input[button]-->
								<div>
									<?php
										//	Instância do objeto vinho();
										$cad = new Vinho();
										// if para verficiar se o botão "btnVoltar" foi acionado;
										if(isset($_POST['btnVoltar'])){
											//se caso o btnVoltar for precionado redirecionará para a pagina principal "index.php";
											header('Location:index.php');
										}
										//Senão vefica se o "btn" foi acionado 
										else if(isset($_POST['btn'])){   
											//entrando no elseif ele testará se os campos estão vazios;
											if($_POST['nome'] == "" || $_POST['tipo'] == "" || $_POST['preco'] == ""  || $_POST['safra'] == ""){   
												// se sim exibirá uma mensagem informando para corrigir os campos;
												echo "<br/><span style='color:red;'><b>PREENCHA OS CAMPOS CORRETAMENTE!</b></span>";
											//se os campos não estiverem em branco entra no else;
											}else{
												//sets do objeto Vinho() e Bebida();
												//repare q está passando por Parâmetros o post de cada campo digitado; 
												$cad->setNome($_POST['nome'])."<br/>";
												$cad->setTipo($_POST['tipo'])."<br/>";
												$cad->setPreco($_POST['preco'])."<br/>";
												$cad->setSafra( $_POST['safra'])."<br/>";
												// aqui está chamando os metodos;	
												$result1 = $cad->mostrarBebida();
												$result2 = $cad->verificaPreco($_POST['preco']);
												//exibindo a resultado na tela;
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