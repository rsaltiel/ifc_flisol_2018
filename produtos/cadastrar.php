<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/estilos.css">
</head>
<body>
    <div class="container">

        <div class="row">
			<div class="col-md-3 padeador">
				<a href="../clientes">
					<div class="btn btn-success btn-lg center-block">Clientes</div>
				</a>
			</div>			
			
			<div class="col-md-3 padeador">
				<a href="../produtos">
					<div class="btn btn-primary btn-lg center-block">Produtos</div>
				</a>
			</div>	
			
			<div class="col-md-3 padeador">
				<a href="../fornecedores">
					<div class="btn btn-warning btn-lg center-block" href="cad_fornecedor">Fornecedores</div>
				</a>
			</div>
			<div class="col-md-3 padeador">
				<a href="venda.html">
					<div class="btn btn-danger btn-lg center-block" href="venda">Vendas</div>
				</a>
			</div>			
		</div>   

        <h3>Cadastrar Produto</h3>
		<form method="POST" action="cadastrar_salvar.php" class="marginB20px">
			<div class="form-group">
				<label for="nome" class="col-2 col-form-label">Nome</label>
				<div>
					<input class="form-control" type="text" placeholder="Nome" name="nome" required>
				</div>
			</div>

			<div class="form-group">
				<label for="cpf" class="col-2 col-form-label">Preço</label>
				<div>
					<input class="form-control" type="text" placeholder="Preço" name="preco" required>
				</div>
			</div>

			<div class="form-group">
				<label for="endereco" class="col-2 col-form-label">Descrição</label>
				<div>
					<textarea name="descricao" class="form-control" required></textarea>
				</div>
			</div>

			<div class="form-group">
				<label for="cidade" class="col-2 col-form-label">Estoque</label>
				<div>
					<input class="form-control" type="text" placeholder="Estoque" name="estoque" required>
				</div>
			</div>

			<div class="form-group">
				<label for="estado" class="col-2 col-form-label">Fornecedor</label>
				<div>
				<select class="form-control" name="fornecedor" required>
					<option value="">Selecione um fornecedor</option>
					<?php
					// SELECT 
					require_once('../conn/conn.php');
					$query = "SELECT * FROM fornecedores ORDER BY nome ASC";
					$stmt = $conn->query($query);
					$fornecedores = $stmt->fetchAll(PDO::FETCH_ASSOC);

					foreach ($fornecedores as $fornecedor){
						echo "<option value=\"".$fornecedor["id"]."\">".$fornecedor["nome"]."</option>";
					}
					?>
					
				</select>
				</div>
			</div>	

			<button type="submit" class="btn btn-primary">Cadastrar</button>

		</form>    
             
    </div>
</body>
</html>
                
    
