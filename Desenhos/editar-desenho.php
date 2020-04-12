<h1>Editar Desenhos</h1>
<?php
	$sql = "SELECT * FROM desenhos WHERE id_desenhos=".$_REQUEST["id_desenhos"];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
<form action="?page=salvar-desenho" method="POST">
	<div class="form-group">
		<label>Nome do Desenho</label>
		<input type="text" name="nome_desenhos" class="form-control" value="<?php print $row->nome_desenhos; ?>">
	</div>
	<div class="form-group">
		<input type="hidden" name="acao" value="editar">
		<input type="hidden" name="id_desenhos" value="<?php  print $row->id_desenhos; ?>">
		<button type="submit" class="btn btn-success">
			Enviar
		</button>
	</div>
</form>