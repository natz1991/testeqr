<?php
	$con = mysql_connect("localhost","root","");
	mysql_select_db("qrteste",$con);
	$result_cliente = mysql_query("SELECT * FROM cliente");
	$result_produto = mysql_query("SELECT * FROM produto");
	$result_pedido = mysql_query("SELECT * FROM pedido");
?>
<html>
	<head>
		<title>Quatro Rodas: Manager</title>
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
						<li class="active"><a data-toggle="tab" href="#cliente">Clientes</a></li>
						<li><a data-toggle="tab" href="#produto">Produtos</a></li>
						<li><a data-toggle="tab" href="#pedido">Pedidos</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="tab-content">
			<div id="cliente" class="tab-pane fade in active">
			 
				<div class="row">
			    	<div class="col-lg-12">
			        <h1 class="page-header">Clientes</h1>
			    </div>
			    
				</div>
				<!-- /.row -->
				<div class="row">
				    <div class="col-lg-12">
					    <a href="clientes/adicionar_cliente.php" class="link"><input type="submit" value="Adicionar Cliente" name="adicionar" class="btn btn-success" /></a>
						</br>
						</br>
						
						<table class="table table-striped">
							<tr>
								<th>ID</th>
								<th>Nome</th>
								<th>Email</th>
								<th>Telefone</th>
								<th>Ação</th>
								
							</tr>
							<?php
								$i=0;
								while($row = mysql_fetch_array($result_cliente)) {
									if($i%2==0)
									$classname="evenRow";
									else
									$classname="oddRow";
									?>
									<tr class="<?php if(isset($classname)) echo $classname;?>">
										<td><?php echo $row["id"]; ?></td>
										<td><?php echo $row["nome"]; ?></td>
										<td><?php echo $row["email"]; ?></td>
										<td><?php echo $row["telefone"]; ?></td>
										<td>
											<a href="clientes/editar_cliente.php?userId=<?php echo $row["id"]; ?>" class="link">
												<input type="submit" value="editar" name="edit" class="btn btn-warning" />
											</a>  <a href="clientes/deletar_cliente.php?userId=<?php echo $row["id"]; ?>"  class="link">
												<input type="submit" value="deletar" name="edit" class="btn btn-danger" />
											</a>
										</td>
									</tr>
									<?php
									$i++;
								}
							?>
							</form>
						</table>
					</div>
				</div>
			    
			</div>
		
			<div id="produto" class="tab-pane fade">
			    <div class="row">
			    	<div class="col-lg-12">
			        <h1 class="page-header">Produto</h1>
			    </div>
			    
				</div>
				<!-- /.row -->
				<div class="row">
				    <div class="col-lg-12">
					    <a href="produtos/adicionar_produto.php" class="link"><input type="submit" value="Adicionar Produto" name="adicionar" class="btn btn-success" /></a>
						</br>
						</br>
						
						<table class="table table-striped">
							<tr>
								<th>ID</th>
								<th>Nome</th>
								<th>Descrição</th>
								<th>Preço</th>
								<th>Ação</th>
								
							</tr>
							<?php
								$i=0;
								while($row = mysql_fetch_array($result_produto)) {
									if($i%2==0)
									$classname="evenRow";
									else
									$classname="oddRow";
									?>
									<tr class="<?php if(isset($classname)) echo $classname;?>">
										<td><?php echo $row["id"]; ?></td>
										<td><?php echo $row["nome"]; ?></td>
										<td><?php echo $row["descricao"]; ?></td>
										<td><?php echo $row["preco"]; ?></td>
										<td>
											<a href="produtos/editar_produto.php?userId=<?php echo $row["id"]; ?>" class="link">
												<input type="submit" value="editar" name="edit" class="btn btn-warning" />
											</a>  <a href="produtos/deletar_produto.php?userId=<?php echo $row["id"]; ?>"  class="link">
												<input type="submit" value="deletar" name="edit" class="btn btn-danger" />
											</a>
										</td>
									</tr>
									<?php
									$i++;
								}
							?>
							</form>
						</table>
					</div>
				</div>
			</div>
			
			<div id="pedido" class="tab-pane fade">
			    
			    <div class="row">
			    	<div class="col-lg-12">
			        <h1 class="page-header">Pedido</h1>
			    </div>
			    
				</div>
				<!-- /.row -->
				<div class="row">
				    <div class="col-lg-12">
					    <a href="pedidos/adicionar_pedido.php" class="link"><input type="submit" value="Adicionar Pedido" name="adicionar" class="btn btn-success" /></a>
						</br>
						</br>
						
						<table class="table table-striped">
							<tr>
								<th>ID</th>
								<th>Nome</th>
								<th>Produto</th>
								<th>Ação</th>
								
							</tr>
							<?php
								$i=0;
								while($row = mysql_fetch_array($result_pedido)) {
									
									$result_cl = mysql_query("SELECT * FROM cliente WHERE id='" . $row["id_cliente"] . "'");
									$result_pr = mysql_query("SELECT * FROM produto WHERE id='" . $row["id_produto"] . "'");
									
									$result_cl = mysql_fetch_array($result_cl);
									$result_pr = mysql_fetch_array($result_pr);
									
									if($i%2==0)
									$classname="evenRow";
									else
									$classname="oddRow";
									?>
									<tr class="<?php if(isset($classname)) echo $classname;?>">
										<td><?php echo $row["id"]; ?></td>
										<td><?php echo $result_cl["nome"]; ?></td>
										<td><?php echo $result_pr["nome"]; ?></td>
										<td>
											</a>  <a href="pedidos/deletar_pedido.php?userId=<?php echo $row["id"]; ?>"  class="link">
												<input type="submit" value="deletar" name="edit" class="btn btn-danger" />
											</a>
										</td>
									</tr>
									<?php
									$i++;
								}
							?>
							</form>
						</table>
					</div>
				</div>
			    
			</div>
			
		</div>
		
	</body>
</html>