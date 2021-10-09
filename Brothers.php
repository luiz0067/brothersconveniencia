<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" type="text/css" href="./css/estilo.css" />
<style type="text/css"></style>
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
						
<div class="conteudo">

				
						<div class="conteiner_brothers" style="margin-top:50px;">
						<div class="letra_20_brothers">
							<img src="./imagens/layout/conheça.png">
						</div>
			
						
						</div>	
									<div class="clear" ></div>
						
			
				<div class="imagem_brothers_pequena" style="margin-right:70px; padding-top:10px; ">
							<div class="brothers">			
								<img src="./imagens/layout/.png" style="float:left;width:108px;height:77px;"/>
							</div>
							<div class="brothers">			
								<img src="./imagens/layout/.png" style="float:right;width:108px;height:77px;"/>
							</div>
							<div class="brothers">			
								<img src="./imagens/layout/.png" style="float:left;width:108px;height:77px;"/>
							</div>
							<div class="brothers">			
								<img src="./imagens/layout/.png" style="float:right;width:108px;height:77px;"/>
							</div>
							<div class="brothers">			
								<img src="./imagens/layout/.png" style="float:left;width:108px;height:77px;"/>
							</div>
							<div class="brothers">			
								<img src="./imagens/layout/.png" style="float:right;width:108px;height:77px;"/>
							</div>
						
							<div class="brothers">			
								<img src="./imagens/layout/.png" style="float:left;width:108px;height:77px;"/>
							</div>
							<div class="brothers">			
								<img src="./imagens/layout/.png" style="float:right;width:108px;height:77px;"/>
							</div>
						
							<div class="brothers">			
								<img src="./imagens/layout/.png" style="float:left;width:108px;height:77px;"/>
							</div>
							<div class="brothers">			
								<img src="./imagens/layout/.png" style="float:right;width:108px;height:77px;"/>
							</div>
			
				
										
			
				</div>
					<div class="letra_16_brothers">
							Da para colocar algum coisa aqui régis,só não ficar um<br />
										site apenas com fotos e tals,alguma mensagem, ou<br />
										algo do tipo.<br/>
										Da para colocar algum coisa aqui régis,só não ficar um<br />
										site apenas com fotos e tals,alguma mensagem, ou<br />
										algo do tipo.<br/>
										Da para colocar algum coisa aqui régis,só não ficar um<br />
										site apenas com fotos e tals,alguma mensagem, ou<br />
										algo do tipo.<br/>
							
			</div>	
				
