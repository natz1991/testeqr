<?php
	if(count($_POST)>0) {
		$conn = mysql_connect("localhost","root","");
		mysql_select_db("qrteste",$conn);
		mysql_query("INSERT INTO cliente (nome, email, telefone) VALUES ('" . $_POST["nome"] . "','" . $_POST["email"] . "','" . $_POST["telefone"] . "')");
		$current_id = mysql_insert_id();
		if(!empty($current_id)) {
			$message = "Cliente adicionado com sucesso";
		}
	}
?>
<html>
	<head>
		<title>Quatro Rodas: Adicionar Cliente</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
		<script type="text/javascript">
		/* Máscaras ER */
		function mascara(o,f){
		    v_obj=o
		    v_fun=f
		    setTimeout("execmascara()",1)
		}
		function execmascara(){
		    v_obj.value=v_fun(v_obj.value)
		}
		function mtel(v){
		    v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
		    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
		    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
		    return v;
		}
		function id( el ){
			return document.getElementById( el );
		}
		window.onload = function(){
			id('telefone').onkeypress = function(){
				mascara( this, mtel );
			}
		}
		</script>
		
	</head>
	<body>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Quatro Rodas</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="../index.php">Clientes</a></li>
						<li><a href="../index.php">Produtos</a></li>
						<li><a href="../index.php">Pedidos</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="tab-content">
			<div id="cliente" class="tab-pane fade in active">
				<div class="row">
			    	<div class="col-lg-12">
			        <h1 class="page-header">Adicionar Cliente</h1>
			    </div>
				</div>
				<div class="row">
				    <div class="col-lg-12">
					    <a href="../index.php" class="link"><input type="submit" value="Voltar" name="voltar" class="btn btn-danger" /></a>
						</br>
						</br>
						<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
						<table class="table table-striped">
							<tr>
								<th>Nome</th>
								<th>Email</th>
								<th>Telefone</th>
								<th></th>
							</tr>
							<form method="post" enctype="multipart/form-data" name="form1">
								<tr style="color:#000000;">
									<td><input type="text" id="nome" name="nome" maxlength="80" placeholder="Nome" value="" required></td>
									<td><input type="email" id="email" name="email" maxlength="45" placeholder="Email" value="" required></td>
									<td><input type="text" id="telefone" name="telefone" maxlength="15" placeholder="Telefone" value="" required></td>
									<td><input type="submit" value="Salvar" class="btn btn-success" /></td>
								</tr>
							</form>
						</table>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>