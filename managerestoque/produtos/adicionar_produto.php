<?php
	if(count($_POST)>0) {
		$conn = mysql_connect("localhost","root","");
		mysql_select_db("qrteste",$conn);
		mysql_query("INSERT INTO produto (nome, descricao, preco) VALUES ('" . $_POST["nome"] . "','" . $_POST["descricao"] . "','" . $_POST["preco"] . "')");
		$current_id = mysql_insert_id();
		if(!empty($current_id)) {
			$message = "Produto adicionado com sucesso";
		}
	}
?>
<html>
	<head>
		<title>Quatro Rodas: Adicionar Produto</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
			        <h1 class="page-header">Adicionar Produto</h1>
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
								<th>Produto</th>
								<th>Descrição</th>
								<th>Preço</th>
								<th></th>
							</tr>
							<form method="post" enctype="multipart/form-data" name="form1">
								<tr style="color:#000000;">
									<td><input type="text" id="nome" name="nome" maxlength="80" placeholder="Produto" value="" required></td>
									<td><input type="text" id="descricao" name="descricao" maxlength="250" placeholder="Descrição" value="" required></td>
									<td><input type="text" id="preco" name="preco" maxlength="30" placeholder="Preço" value="" required></td>
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