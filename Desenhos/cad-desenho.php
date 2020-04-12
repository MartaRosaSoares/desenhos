<h1>Cadastrar Desenhos</h1>
<form action="?page=salvar-desenho" method="POST">
	<div class="form-group">
		<label>Nome do Desenho</label>
		<input type="text" name="nome_desenhos" class="form-control">
	</div>
	<div class="form-group">
		<input type="hidden" name="acao" value="cadastrar">
		<button type="submit" class="btn btn-success">
			Enviar
		</button>
	</div>
</form>