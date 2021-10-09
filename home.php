<div class="letrabanner">
				
				<div id="banner">
								<?php		
							$sql = "SELECT id,titulo,imagem FROM slide  order by id desc;"; //altere (clientes) para o nome de sua tabela.
							$result = mysql_query($sql) or die ("N?o foi poss?vel realizar a consulta!!!");
							while ($row = mysql_fetch_assoc($result)){	
						?>
							
					
							<a href="<?php echo $row['titulo']?>" target=""> 
							<img src="./uploads/banner/g_<?php echo $row['imagem']?>" width="756" height="291px" alt="1" alt="brothers"  
								title="brothers" name="brothers" 
								border="0" /> 
							</a>
										
				 		
						<?php
							}
						?>
					</div>	
					
					
						</div>	
						
	<div class="conteudo" style="margin-top:30px ;">
					<div class="conteudo_tex">
					
					<div class="titulo_home"  style="margin-left:10px;margin-top:20px;">
									<img src="./imagens/layout/espaço.png">
									</div>
					
						<div class="letra_16_home1"  style="margin-top:20px;margin-left:10px;float:left;">
										
										Da para colocar algum coisa aqui régis,só não ficar um<br />
										site apenas com fotos e tals,alguma mensagem, ou<br />
										algo do tipo.
									</div>
						</div>	
					
					
					
					
						
			
						<div class="conteudo_img">
							
						</div>
							<div class="clear" ></div>
						<div class="">
										<?php		
												$sql = "SELECT imagem.titulo, imagem.id, imagem.obs, imagem.valor, imagem.imagem, imagem.id_categoria, imagem.id_sub_categoria, sub_categoria.titulo AS titulo_sub_categoria
				FROM imagem
				INNER JOIN sub_categoria ON ( imagem.id_sub_categoria = sub_categoria.id ) 
				INNER JOIN categoria ON ( imagem.id_categoria = categoria.id ) 
				WHERE (
				imagem.id_categoria =6
				)
				AND (
				imagem.id_sub_categoria =1
				) order by id desc limit 0,2"; //altere (clientes) para o nome de sua tabela.
												$result = mysql_query($sql) or die ("N?o foi poss?vel realizar a consulta!!!");
												while ($row = mysql_fetch_assoc($result)){	
											?>
						
						

								<div class="produto1">
											<div class="imagem_produto">
												<img src="./uploads/fotos/g_<?php echo $row['imagem'];?>" border="0" width="187px" height="137px" >
											</div>
											
											<div class="conteudo_produto2">
												<div class="subtitulo_produto">
													Promoção:
												</div>
												<div class="subtitulo_produto2" style="margin-left:30px;">
												<?php echo $row['titulo'];?>
												</div>
												<div class="clear"></div>
												<div class="mais">
													<a href="?pg=produto&id=<?php echo $row['id'];?>">
													<div class="letra_mais">
													
														Confira.
														</div>
												
													</a>
												</div>
													</div>
											</div>		
 
					<?php
							
													}
														
														
														
											
											
								?>
									
							<?php		
								$sql = "SELECT id,titulo,imagem,data_emissao FROM albuns order by id desc limit 0,01 "; //altere (clientes) para o nome de sua tabela.
								$result = mysql_query($sql) or die ("N?o foi poss?vel realizar a consulta!!!");
								while ($row = mysql_fetch_assoc($result)){	
							?>									
						<div class="produto2">
						<div class="clear" ></div>
								<div class="imagem_produto1">
														
									<a href="./uploads/fotos/g_<?php echo $row['imagem'];?>" rel="lightbox[roadtrip]">
										<img src="./uploads/fotos/g_<?php echo $row['imagem'];?>" alt="Brothers" title="Brothers" name="Brothers" border="0" width="302" height="221" />
									</a>
							
								</div>
								<div class="conteudo_produto1">
									<div class="titulo_produto"  style="margin-left:10px;">
										Fotos recentes
									</div>
									<div class="titulo_produto" style="margin-left:20px;">
										<?php echo $row['data_emissao'];?>
									</div>
									<div class="mais1">
										
									<a href="?pg=fotos">
										<div class="lateral_mais">
													Ver galeria.
													</div>
										</a>
									</div>
										</div>
						</div>			
				
				


				
													
					<?php
							
													}
														
														
														
											
											
								?>
					
				
				
				
				






				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
						<div class="clear" ></div>
				
				
				</div>
			<div class="clear" ></div>
				</div>
					<div class="clear" ></div>