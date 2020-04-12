<h1>Listar Desenhos</h1>
<?php
	$sql = "SELECT * FROM desenhos";
	
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	if($qtd > 0){
		print "Encontrei <b>".$qtd."</b> resultado(s)";
		print "<table class='table table-striped table-hover table-bordered'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome do Desenho</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_desenhos."</td>";
			print "<td>".$row->nome_desenhos."</td>";
			print "<td>
						<button class='btn btn-success' onclick=\"location.href='?page=editar-desenho&id_desenhos=".$row->id_desenhos."';\" >Editar</button>
						
						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-desenho&acao=excluir&id_desenhos=".$row->id_desenhos."';}else{false;}\">Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não há dados cadastrados.";
	}
?>







