
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
	<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>
<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>selecione o item</h1>
							<p>Um pequeno e simples site criado em PHP,ultilizando Programação Orientada a Objetos (POO),para cadastro de produtos &#128521</p>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form method="post">
								<div class="form-group">
									<span class="form-label">Selecione a Bebida</span>
									<select class="form-control" name="bebida">
										<option value="0" disabled selected>--Selecione--</option>
										<option value="1">Refrigerante</option>
										<option value="2">Suco</option>
										<option value="3">Vinho</option>
									</select>
								</div>
								<div class="form-btn">
									<input type="submit" name="btn" value="Selecionar" class="submit-btn" style="text-align:center;background-color:green;">
								</div><br>
								<div>
									<?php
										if(isset($_POST['btn'])){
											switch(@$_POST['bebida']){
												case 0:
													echo "<span style='color:red;'><b>SELECIONE UMA BEBIDA</b></span>";
													break;
												case 1:
													header("Location: indexRefrigerante.php");
													break;
												case 2:
													header("Location: indexSuco.php");
													break;
												case 3:
													header("Location: indexVinho.php");
													break;

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