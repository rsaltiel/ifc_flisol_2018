<?php

// Faz a conexão com o banco de dados
include('../conn/conn.php');

// SELECT 
$query = "SELECT * FROM clientes WHERE nome = :nome";
$stmt = $conn->prepare($query);
$stmt->bindValue(':nome', $_POST['nome']);
$stmt->execute();

$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC); //Retorna uma array com índice associativo.  Ex:  [id] => 1   [nome] => Rafael

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
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

        <h3>Resultado de sua busca</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Ativo</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>                
                <?php                    
                foreach ($clientes as $cliente){
                    echo "<tr>";
                    echo "<td>".$cliente['id']."</td>";
                    echo "<td>".$cliente['nome']."</td>";
                    echo "<td>".$cliente['cpf']."</td>";
                    echo "<td>".$cliente['endereco']."</td>";
                    echo "<td>".$cliente['cidade']."</td>";
                    echo "<td>".$cliente['estado']."</td>";
                    echo "<td>".$cliente['telefone']."</td>";
                    echo "<td>".$cliente['email']."</td>";
                    echo "<td>";

                    switch ($cliente['ativo']) {
                        case 0:
                            echo "Inativo";
                            break;
                        
                        default:
                            echo "Ativo";
                            break;
                    }
                    
                    echo "</td>";
                    echo "<td><a href=\"editar.php?id=".$cliente['id']."\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></a> <a href=\"deletar.php?id=".$cliente['id']."\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a></td>";
                    echo "</tr>";
                }
                ?>              
            </tbody>
        </table>
             
    </div>
</body>
</html>


