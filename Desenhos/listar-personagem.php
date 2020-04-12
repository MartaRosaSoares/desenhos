<h1>Listar Personagens</h1>
<?php
	$sql = "SELECT de.*, pe.* FROM personagem AS pe
			INNER JOIN desenhos AS de
			ON de.id_desenhos = pe.desenhos_id_desenhos
			ORDER BY pe.id_personagem";
	
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	if($qtd > 0){
		print "Encontrei <b>".$qtd."</b> resultado(s)";
		print "<table class='table table-striped table-hover table-bordered'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Desenhos</th>";
		print "<th>Nome do Personagem</th>";
		print "<th>Nome do Criador</th>";
		print "<th>Ano do desenho</th>";
		print "<th>Episodio</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_personagem."</td>";
			print "<td>".$row->nome_desenhos."</td>";
			print "<td>".$row->nome_personagem."</td>";
			print "<td>".$row->nome_criador."</td>";
			print "<td>".$row->ano_desenho."</td>";
			print "<td>".$row->episodio."</td>";
			print "<td>
						<button class='btn btn-success' onclick=\"location.href='?page=editar-personagem&id_personagem=".$row->id_personagem."';\" >Editar</button>
						
						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-personagem&acao=excluir&id_personagem=".$row->id_personagem."';}else{false;}\">Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não há dados cadastrados.";
	}
?>







