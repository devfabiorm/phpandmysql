<?php require_once("cabecalho.php"); 
require_once("banco-categoria.php");
require_once("logica-usuario.php");

verificaUsuario();
$produto = array('nome' => "" ,'preco'=> "",'descricao' => "", 'categoria_id' => "1");
$usado = "";
$categorias = listaCategorias($conexao);
?>
				<h1>Formulário de Produto</h1>
				<form action="adiciona-produto.php" method="post">
					<table class="table">
						<?php include("produto-formulario-base.php"); ?>
						<tr>
							<td>
								<input class="btn btn-primary" type="submit" value="Cadastrar">
							</td>
						</tr>
					</table>
					
				</form>
<?php include("rodape.php") ?>