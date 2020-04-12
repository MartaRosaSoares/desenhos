<h1>Editar Personagem</h1>
<?php
	$sql = "SELECT * FROM personagem WHERE id_personagem=".$_REQUEST["id_personagem"];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
	
	//print $_REQUEST["id_personagem"];
?>
<form action="?page=salvar-personagem" method="POST">
	<div class="form-group">
		<label>Nome do Desenho</label>
		<?php
			$sql_2 = "SELECT * FROM desenhos";
			
			$res_2 = $conn->query($sql_2) or die($conn->error);
			
			$qtd_2 = $res_2->num_rows;
			
			if($qtd_2 > 0){
				print "<select name='desenhos_id_desenhos' class='form-control'>";
				while($row_2 = $res_2->fetch_object()){
					if(($row->desenhos_id_desenhos) == ($row_2->id_desenhos)){
						print "<option value='".$row_2->id_desenhos."' selected>".$row_2->nome_desenhos."</option>";
					}else{
						print "<option value='".$row_2->id_desenhos."'>".$row_2->nome_desenhos."</option>";
					}
				}
				print "</select>";
			}else{
				print "Não há dados cadastrados.";
			}
		?>
	</div>
	<div class="form-group">
		<label>Nome do Personagem</label>
		<input type="text" name="nome_personagem" class="form-control" value="<?php print $row->nome_personagem; ?>">
	</div>
	<div class="form-group">
		<label>Nome do Criador</label>
		<input type="text" name="nome_criador" class="form-control" value="<?php print $row->nome_criador; ?>">
	</div>
	<div class="form-group">
		<label>Ano do Desenho</label>
		<input type="number" name="ano_desenho" class="form-control" value="<?php print $row->ano_desenho; ?>">
	</div>
	<div class="form-group">
		<label>Episodio</label>
		<input type="number" name="episodio" class="form-control" value="<?php print $row->episodio; ?>">
	</div>
	<div class="form-group">
		<input type="hidden" name="acao" value="editar">
		<input type="hidden" name="id_personagem" value="<?php print $row->id_personagem; ?>">
		<button type="submit" class="btn btn-success">
			Editar
		</button>
	</div>
</form>




