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
						
<div class="conteudo" style="margin-top:20px;">
	

		<div id="conteudo_esquerda_conatato">
			<div class="letraimagemMyriadPro" style="margin-left:10px; padding-top:10px; margin-bottom:30px; color:#f18526">
				<img src="./imagens/layout/entre.png" style="width:291px;height:27px;"/>
			</div>
			<form name="form1" id="form1" action="enviar_contato.php" method="post" class="formcontato">
					<div id="tudo_conato">
						<div class="conteudo_contato">
							<div class="titulo_contato">
								Nome:
							</div>
							<div class="input_contato">
								<input name="nome" style="width:400px;" type="text" id="nome">
							</div>
						</div>
						<div class="conteudo_contato">
							<div class="titulo_contato">
								Endereço:
							</div>
							<div class="input_contato">
								<input name="endereco" style="width:400px;" type="text" id="endereco">
							</div>
						</div>
						<div class="conteudo_contato">
							<div class="titulo_contato">
								Cidade:
							</div>
							<div class="input_contato">
								<input name="cidade" style="width:195px;" type="text" id="cidade">
							</div>
						</div>
						<div class="conteudo_contato" style="margin-left:6px" >
							<div class="titulo_contato">
								Telefone:
							</div>
							<div class="input_contato">
								<input name="fone" style="width:195px;" type="text" class="inputcontato" id="fone">
							</div>
						</div>
						<div class="conteudo_contato" >
							<div class="titulo_contato">
								E-mail:
							</div>
							<div class="input_contato">
								<input name="email" style="width:400px;" type="text" class="inputcontato" id="email">
							</div>
						</div>
						<div class="conteudo_contato" >
							<div class="titulo_contato">
								Mensagem:
							</div>
							<div class="input_contato">
								<textarea name="mensagem" type="textarea"  style="width:400px; height:100px"  class="inputcontato" id="mensagem"></textarea>
							</div>
						</div>
								<div class="clear"></div>
								<div style="margin-top:10px; margin-bottom:50px;">
									  <input type="submit" name="enviar" value="Enviar" id="enviar" style=" margin-left:10px; margin-top:10px; background:#7F692D; color:#ffffff; ">
									  <input type="reset" name="reset" value="Limpar" id="reset" style=" margin-left:10px; margin-top:10px; background:#7F692D; color:#ffffff; ">
								</div>  
								

					</div>
				</form>
	
	
				</div>	
														
														
				
				<div id="conteudo_direita_conatato">
								<div id="conteudo_direita_conatato">
										
									
										<div class="letra12MyriadPro" style="margin-left:10px; padding-top:80px; color:#7F682C; text-align: right;">
										<br>
										Atendimento:
										</div>
										<div class="conteudo_contato1" style="margin-left:10px; padding-top:10px; margin-bottom:20px; text-family:Myriad Pro; text-align:right;">
										
														Segunda Terça e Quarta | 13:00 às 00:00<br>
														Quinta Sexta das 13:00 as 05:00 da manha<br>
														Sabado das 16:00 as 05:00 da manha<br>
														domingo das 16:00 as 00:00<br>
														<br>
														
														Rua Dom Pedro II, 3272 <br>
														Centro - Toledo | PR - <br>
														
															</div>
											<div class="letra12MyriadPro" style="margin-left:10px; padding-top:10px; color:#7F682C; text-align: right;">
											Telefone:
											</div>
											<div class="conteudo_contato1" style="margin-left:10px; padding-top:10px; margin-bottom:20px; text-align:right;">
															45) 3252-7626<br>
															</div>
											</div>
							</div>	
	
			</div>
				<div class="clear"></div>
</div>
