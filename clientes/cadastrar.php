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
				<a href="cad_produto.html">
					<div class="btn btn-primary btn-lg center-block">Produtos</div>
				</a>
			</div>	
			
			<div class="col-md-3 padeador">
				<a href="cad_fornecedor.html">
					<div class="btn btn-warning btn-lg center-block" href="cad_fornecedor">Fornecedores</div>
				</a>
			</div>
			<div class="col-md-3 padeador">
				<a href="venda.html">
					<div class="btn btn-danger btn-lg center-block" href="venda">Vendas</div>
				</a>
			</div>			
		</div>   

        <h3>Cadastrar Cliente</h3>
		<form method="POST" action="cadastrar_salvar.php" class="marginB20px">
			<div class="form-group">
				<label for="nome" class="col-2 col-form-label">Nome</label>
				<div>
					<input class="form-control" type="text" placeholder="Nome" name="nome" required>
				</div>
			</div>

			<div class="form-group">
				<label for="cpf" class="col-2 col-form-label">CPF</label>
				<div>
					<input class="form-control" type="text" placeholder="CPF" name="cpf" required>
				</div>
			</div>

			<div class="form-group">
				<label for="endereco" class="col-2 col-form-label">Endereço</label>
				<div>
					<input class="form-control" type="text" placeholder="Endereço" name="endereco" required>
				</div>
			</div>

			<div class="form-group">
				<label for="cidade" class="col-2 col-form-label">Cidade</label>
				<div>
					<input class="form-control" type="text" placeholder="Cidade" name="cidade" required>
				</div>
			</div>

			<div class="form-group">
				<label for="estado" class="col-2 col-form-label">Estado</label>
				<div>
				<select class="form-control" name="estado" required>
					<option value="">Selecione um estado</option>
					<option value="AC">Acre</option>
					<option value="AL">Alagoas</option>
					<option value="AP">Amapá</option>
					<option value="AM">Amazonas</option>
					<option value="BA">Bahia</option>
					<option value="CE">Ceará</option>
					<option value="DF">Distrito Federal</option>
					<option value="ES">Espírito Santo</option>
					<option value="GO">Goiás</option>
					<option value="MA">Maranhão</option>
					<option value="MT">Mato Grosso</option>
					<option value="MS">Mato Grosso do Sul</option>
					<option value="MG">Minas Gerais</option>
					<option value="PA">Pará</option>
					<option value="PB">Paraíba</option>
					<option value="PR">Paraná</option>
					<option value="PE">Pernambuco</option>
					<option value="PI">Piauí</option>
					<option value="RJ">Rio de Janeiro</option>
					<option value="RN">Rio Grande do Norte</option>
					<option value="RS">Rio Grande do Sul</option>
					<option value="RO">Rondônia</option>
					<option value="RR">Roraima</option>
					<option value="SC">Santa Catarina</option>
					<option value="SP">São Paulo</option>
					<option value="SE">Sergipe</option>
					<option value="TO">Tocantins</option>
				</select>
				</div>
			</div>

			<div class="form-group">
				<label for="cidade" class="col-2 col-form-label">Telefone</label>
				<div>
					<input class="form-control" type="text" placeholder="Telefone" name="telefone" required>
				</div>
			</div>

			<div class="form-group">
				<label for="cidade" class="col-2 col-form-label">E-mail</label>
				<div>
					<input class="form-control" type="email" placeholder="E-mail" name="email" required>
				</div>
			</div>

			<div class="form-group">
				<label for="estado" class="col-2 col-form-label">Ativo?</label>
				<div>
				<select class="form-control" name="ativo" required>
					<option value="">Selecione uma opção</option>
					<option value="0">Não</option>
					<option value="1">Sim</option>					
				</select>
				</div>
			</div>

			<button type="submit" class="btn btn-primary">Cadastrar</button>

		</form>    
             
    </div>
</body>
</html>
                
    
