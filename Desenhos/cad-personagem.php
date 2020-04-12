<h1>Cadastrar Personagens</h1>
<form action="?page=salvar-personagem" method="POST">
	<div class="form-group">
		<label>Nome do Desenho</label>
		<?php
			$sql = "SELECT * FROM desenhos";
			
			$res = $conn->query($sql) or die($conn->error);
			
			$qtd = $res->num_rows;
			
			if($qtd > 0){
				print "<select name='desenhos_id_desenhos' class='form-control'>";
				
				while($row = $res->fetch_object()){
					print "<option value='".$row->id_desenhos."'>".$row->nome_desenhos."</option>";
				}
				print "</select>";
			}else{
				print "Não há dados cadastrados.";
			}
		?>
	</div>
	<div class="form-group">
		<label>Nome do Personagem</label>
		<input type="text" name="nome_personagem" class="form-control">
	</div>
	<div class="form-group">
		<label>Nome do Criador</label>
		<input type="text" name="nome_criador" class="form-control">
	</div>
	<div class="form-group">
		<label>Ano do Desenho</label>
		<input type="number" name="ano_desenho" class="form-control">
	</div>
	<div class="form-group">
		<label>Episodio </label>
		<input type="number" name="episodio" class="form-control">
	</div>
	<div class="form-group">
		<input type="hidden" name="acao" value="cadastrar">
		<button type="submit" class="btn btn-success">
			Enviar
		</button>
	</div>
</form>




