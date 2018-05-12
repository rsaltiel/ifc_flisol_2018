<?php

// Faz a conexão com o banco de dados
include('../conn/conn.php');

// SELECT 
$query = "SELECT p.id, p.nome, p.preco, p.descricao, p.estoque, f.nome as nome_fornecedor FROM produtos p
          INNER JOIN fornecedores f
          ON p.fornecedores_id = f.id
          ORDER BY p.nome ASC";
$stmt = $conn->query($query);
$fornecedores = $stmt->fetchAll(PDO::FETCH_ASSOC); //Retorna uma array com índice associativo.  Ex:  [id] => 1   [nome] => Rafael

?>

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
				<a href="../vendas">
					<div class="btn btn-danger btn-lg center-block" href="venda">Vendas</div>
				</a>
			</div>			
		</div>   

        <h3>Relação de clientes</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Estoque</th>
                    <th scope="col">Fornecedor</th>                    
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>                
                <?php                    
                foreach ($fornecedores as $fornecedor){
                    echo "<tr>";
                    echo "<td>".$fornecedor['id']."</td>";
                    echo "<td>".$fornecedor['nome']."</td>";
                    echo "<td>".$fornecedor['preco']."</td>";
                    echo "<td>".$fornecedor['descricao']."</td>";
                    echo "<td>".$fornecedor['estoque']."</td>";
                    echo "<td>".$fornecedor['nome_fornecedor']."</td>";                 
                    echo "<td><a href=\"editar.php?id=".$fornecedor['id']."\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></a> <a href=\"deletar.php?id=".$fornecedor['id']."\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a></td>";
                    echo "</tr>";
                }
                ?>              
            </tbody>
        </table>
        <a href="cadastrar.php" class="btn btn-primary">Cadastrar novo produto</a>          
        <form action="buscar.php" class=" pull-right" method="POST">
            <input type="text" class="span2" name="nome" placeholder="Digite o nome do produto">
            <button class="btn btn-inverse">Buscar</button>
        </form>
    </div>
</body>
</html>


        



