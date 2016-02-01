<?php
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("qrteste",$conn);
	
	$result_cliente = mysql_query("SELECT * FROM cliente");
	$result_produto = mysql_query("SELECT * FROM produto");
	
	if(count($_POST)>0) {
		mysql_query("INSERT INTO pedido (id_cliente, id_produto) VALUES ('" . $_POST["id_cliente"] . "','" . $_POST["id_produto"] . "')");
		$current_id = mysql_insert_id();
		if(!empty($current_id)) {
			$message = "Pedido adicionado com sucesso";
		}
	}
?>
<html>
	<head>
		<title>Quatro Rodas: Adicionar Pedido</title>
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
			        <h1 class="page-header">Adicionar Pedido</h1>
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
								<th>ID Cliente</th>
								<th>ID Produto</th>
								<th></th>
							</tr>
							<form method="post" enctype="multipart/form-data" name="form1">
								<tr style="color:#000000;">
									
									<td><select id="id_cliente" name="id_cliente">
										<?php
											$i=0;
											while($row = mysql_fetch_array($result_cliente)) {
												?>
													<option value="<?php echo $row["id"]; ?>"><?php echo $row["nome"];?></option>
												<?php
												$i++;
											}
										?>
										</select>
									</td>
									
									<td><select id="id_produto" name="id_produto">
										<?php
											$i=0;
											while($row = mysql_fetch_array($result_produto)) {
												?>
													<option value="<?php echo $row["id"]; ?>"><?php echo $row["nome"];?></option>
												<?php
												$i++;
											}
										?>
										</select>
									</td>
									
									
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