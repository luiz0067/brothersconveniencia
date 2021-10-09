<?php include('./adm/conecta.php')


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/swfobject_modified.js" type="text/javascript"></script>
<script src="js/jquery.cycle.all.2.72.js" type="text/javascript"></script>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/lightbox.js"></script>
<link href="css/lightbox.css" rel="stylesheet" />
<link href="css/lightbox.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" type="text/css" href="./css/estilo.css" />
<style type="text/css"></style>
<script>
 function trocardecor (elemento,cor){
 elemento.style.color=cor;}
</script>
<script>
var $j = jQuery.noConflict();
	$j('#lightbox').css("background","red");
	
	var jQuery = $;
	$(function(){
			$('#banner').cycle({
					fx: 'zoom', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
					pager:  '#paginador',
					speed: 300,
					timeout: 5000,
					cleartype: false,
					pause: true
			});
	});
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>
<body onload="MM_preloadImages('imagens/layout/destilados.png')">

<div id="fb-root"></div>


<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="topo_tudo">
  <div id="topo">
    <div class="cont">
      <div class="topo_imagem">
        <nav id="menu-principal">
          <ul id="menucima">
            <li class="menucima"><a href="?pg=contato" class="text-menu">Contato</a></li>
            <li class="menucima"><a href="?pg=fotos" class="text-menu">Fotos</a></li>
            <li class="menucima"><a href="?pg=Brothers" class="text-menu">O Brothers</a></li>
            <li class="menucima"><a href="?pg=home" class="text-menu">Home</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
<div class="top_tudo">
  <div class="tudo_topo"> <a href="?pg=home">
    <div class="logo"></div>
  </div>
  </a> </div>
<div id="fundo-escolha">
  <div class="escolha">
    <div class="itens-escolha" style="width:203px;"><img src="imagens/layout/escolha.png" width="203" height="220" border="0" /></div>
    <div class="itens-escolha"> <a href="?pg=categoria_produto&id_categoria=1" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('destilados','','imagens/layout/destilados.png',1)"> <img src="imagens/layout/destilados2.png" border="0px" width="159" height="220" id="destilados" /> </a> </div>
    <div class="itens-escolha"> <a href="?pg=categoria_produto&id_categoria=2" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('cervejas','','imagens/layout/cervejas.png',1)"> <img src="imagens/layout/cervejas2.png" border="0px" width="159" height="220" id="cervejas" /> </a> </div>
    <div class="itens-escolha"> <a href="?pg=categoria_produto&id_categoria=3" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('combos','','imagens/layout/combos.png',1)"> <img src="imagens/layout/combos2.png" border="0px" width="159" height="220" id="combos" /> </a> </div>
    <div class="itens-escolha"> <a href="?pg=categoria_produto&id_categoria=4" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('refri','','imagens/layout/refri.png',1)"> <img src="imagens/layout/refri2.png" border="0px" width="159" height="220" id="refri" /> </a> </div>
    <div class="itens-escolha"> <a href="?pg=categoria_produto&id_categoria=5" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('salgados','','imagens/layout/salgados.png',1)"> <img src="imagens/layout/salgados2.png" border="0px" width="159" height="220" id="salgados" /> </a> </div>
    <div class="itens-escolha"><img src="imagens/layout/rabo.png" width="103" height="220" /></div>
  </div>
</div>
</div>
<div id="tudo">
  <div class="clear" ></div>
  <div id="meio">
    <div id="marcas">
      <div class="letrabanner1">
 
	
       <div class="imagem_marcas">
	  
        <div style="float:left;margin-left:7px;maring-top:10px margin-bottom:10px;">
          <div style="margin-top:10px; margin-bottom:10px;"> </div>
          <!--patrocinios--> 
          <script> 
								
								$(function(){
										$('#patrocinio').cycle({
												fx: 'scrollLeft', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
												
												speed: 500,
												timeout: 2000,
												cleartype: false,
												pause: true
										});
								});
						</script>
          <div id="slider">
            <div id="patrocinio"  > <a href="http://www.studiomidiamix.com.br" target="_blank"><img src="./parceiros/midiamix.jpg" width="157" height="83" alt="1" /></a> </div>
          </div>
		  <script> 
								
								$(function(){
										$('#patrocinio1').cycle({
												fx: 'scrollLeft', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
												
												speed: 500,
												timeout: 2000,
												cleartype: false,
												pause: true
										});
								});
						</script>
          <div id="slider">
            <div id="patrocinio1" style="margin-top:15px; > <a href="http://www.rota.com.br" target="_blank"><img src="./parceiros/rota.jpg" width="157" height="83" alt="1" /></a>  </div>
          </div>	
			 <script> 
								
								$(function(){
										$('#patrocinio2').cycle({
												fx: 'scrollLeft', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
												
												speed: 500,
												timeout: 2000,
												cleartype: false,
												pause: true
										});
								});
						</script>
          <div id="slider">
            <div id="patrocinio2" style="margin-top:15px; > <a href="" target="_blank"><img src="./parceiros/anuncie.jpg" width="157" height="83" alt="1" /></a></div>
          </div>	
         <script> 
								
								$(function(){
										$('#patrocinio2').cycle({
												fx: 'scrollLeft', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
												
												speed: 500,
												timeout: 2000,
												cleartype: false,
												pause: true
										});
								});
						</script>
          <div id="slider">
            <div id="patrocinio3" style="margin-top:15px; > <a href="#" target="_blank"><img src="./parceiros/anuncie.jpg" width="157" height="83" alt="1" /></a> </div>
          </div>	
		  <script> 
								
								$(function(){
										$('#patrocinio3').cycle({
												fx: 'scrollLeft', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
												
												speed: 500,
												timeout: 2000,
												cleartype: false,
												pause: true
										});
								});
						</script>
          <div id="slider">
            <div id="patrocinio4" style="margin-top:15px; > <a href="#" target="_blank"><img src="./parceiros/anuncie.jpg" width="157" height="83" alt="1" /></a></div>
          </div>
			<script> 
								
								$(function(){
										$('#patrocinio4').cycle({
												fx: 'scrollLeft', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
												
												speed: 500,
												timeout: 2000,
												cleartype: false,
												pause: true
										});
								});
						</script>		

          </div>
        </div>
      </div>
      </div>
 
 
 
    <?php 
				$pg=$_GET["pg"];
				if($pg=="home")
					include('home.php');
				else if($pg=="contato")
					include('contato.php');
				else if($pg=="categoria_produto")
					include('categoria_produto.php');
				else if($pg=="categoria_foto")
					include('categoria_foto.php');
				else if($pg=="produto")
					include('produto.php');
				else if($pg=="links")
					include('links.php');	
				else if($pg=="fotos")
					include('fotos.php');
				else if($pg=="Brothers")
					include('Brothers.php');
				else
					include('home.php');
				?>
  </div>
  <div class="clear" ></div>
  <div class="clear" ></div>
</div>
<div class="clear" ></div>
</div>
<div class="clear" ></div>
<div id="rodape">
  <div class="fundo">
    <div class="fundo2">
      <div class="img_brothers">
        <div id="link_1234_conteudo">
          <nav id="menu-principal">
            <ul id="menucima">
              <li class="menucima"><a href="?pg=contato" class="text-menu">Contato</a></li>
              <li class="menucima"><a href="?pg=fotos" class="text-menu">Fotos</a></li>
              <li class="menucima"><a href="?pg=Brothers" class="text-menu">O Brothers</a></li>
              <li class="menucima"><a href="?pg=home" class="text-menu">Home</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="fundomix"> 
      <div id="facebook">
      
      <div class="fb-like" data-href="http://www.facebook.com/pages/Brothers-Conveni%C3%AAncia/272334702884361" data-send="true" data-width="450" data-show-faces="true" data-font="lucida grande" data-colorscheme="dark"></div>
      
      </div>
      <div style="float:right; display:bloclk; clear:both; margin-top:30px;">
      <a href="http://www.studiomidiamix.com.br/">
        <div class="img_midiamix"> <img src="./imagens/layout/midiamix.png" width="171" height="60" border="0" /> </div>
        </a>
      </div>
      </div>
    </div>
  </div>
</div>
</body>
