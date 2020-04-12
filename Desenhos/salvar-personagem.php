<?php
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO personagem (desenhos_id_desenhos, nome_personagem, nome_criador, ano_desenho, episodio) VALUES (".$_POST["desenhos_id_desenhos"].", '".$_POST["nome_personagem"]."', '".$_POST["nome_criador"]."', '".$_POST["ano_desenho"]."', '".$_POST["episodio"]."')";
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Cadastro realizado com sucesso!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}
		break;
		case "editar":			
			$sql = "UPDATE personagem SET
						desenhos_id_desenhos=".$_POST["desenhos_id_desenhos"].",
						nome_personagem='".$_POST["nome_personagem"]."',
						nome_criador='".$_POST["nome_criador"]."',
						ano_desenho='".$_POST["ano_desenho"]."',
						episodio='".$_POST["episodio"]."' 
					WHERE id_personagem=".$_REQUEST["id_personagem"];
					
			//var_dump($sql);
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Editou com sucesso!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível editar.</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM personagem WHERE id_personagem=".$_REQUEST["id_personagem"];
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Excluiu com sucesso!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível excluir.</div>";
			}
		break;
	}
?>
<p><a class="btn btn-primary" href="?page=listar-personagem">Listar</a></p>







