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

        <h3>Cadastrar Fornecedor</h3>
        
        <?php
        require_once('../conn/conn.php');        
        $query = "INSERT INTO produtos (nome, preco, descricao, estoque, fornecedores_id) VALUES (:nome, :preco, :descricao, :estoque, :fornecedores_id)";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':nome', $_POST['nome']);
        $stmt->bindValue(':preco', $_POST['preco']);
        $stmt->bindValue(':descricao', $_POST['descricao']);
        $stmt->bindValue(':estoque', $_POST['estoque']);
        $stmt->bindValue(':fornecedores_id', $_POST['fornecedor']);      
        
        if ($stmt->execute()){
            echo "Os dados foram gravados com sucesso.";
        } else {
            echo "Ocorreu um erro ao gravar os dados.";
        }
        ?>  
        
        <a href="../produtos">Voltar</a></p>
             
    </div>
</body>
</html>
                
    
