<?php 
	include('./adm/conecta.php');
	
?>
<div class="conteudo">
	<div class="letra12MyriadPro" style="margin-left:10px;margin-top:10px;  color:#7F682c;">
		<img src="./imagens/layout/galeria.png" >
	</div>
	
	<?php		
							$sql = "SELECT id,titulo,imagem,data_emissao FROM albuns order by id desc "; //altere (clientes) para o nome de sua tabela.
							$result = mysql_query($sql) or die ("N?o foi poss?vel realizar a consulta!!!");
							while ($row = mysql_fetch_assoc($result)){	
						?>				
					

			
	<div class="produto" style=":margin-top:10px;">
		<div class="imagem_produto">
			<a href="./uploads/fotos/g_<?php echo $row['imagem']?>" rel="lightbox[roadtrip]">
				<img src="./uploads/fotos/g_<?php echo $row['imagem']?>" alt="Brothers" title="Brothers" name="Brothers" border="0" width="187	" height="137" />
			</a>
		</div>
		<div class="conteudo_produto">
			<div class="titulo_produto">
				
				<?php echo $row['titulo']?>
			</div>
			<div class="subtitulo_produto">
				Data:
				<?php echo $row['data_emissao']?>
			</div>
			<div class="mais">
				
			<a href="?pg=categoria_foto&id_categoria=<?php echo $row['id']?>">
				<div class="letra_mais">
				Ir para.
				</div>
				</a>
			</div>
		</div>
		
	</div>
	<?php
							}			
									
							
							?>
</div>

						<div class="clear" ></div>