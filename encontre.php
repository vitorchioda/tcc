<?php
	$erro=null;
	$valido=false;
 try{
				$connection=new PDO("mysql:host=localhost;dbname=testetcc","root","root");
				$connection->exec("set names utf8");
			}
			catch(PDOException $e){
					$connection=new PDO("mysql:host=localhost;dbname=testetcc","root","");
				$connection->exec("set names utf8");
			}
			?>
<!DOCTYPE html>
 <html>
 <head>
  <meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="encontre.css">
<link rel="icon" href="img/LOGO.fw.png" type="image/x-icon" />
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Hind+Siliguri" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){

jQuery("#subirTopo").hide();

jQuery('a#subirTopo').click(function () {
         jQuery('body,html').animate({
           scrollTop: 0
         }, 800);
        return false;
   });

jQuery(window).scroll(function () {
         if (jQuery(this).scrollTop() > 1000) {
            jQuery('#subirTopo').fadeIn();
         } else {
            jQuery('#subirTopo').fadeOut();
         }
     });
});
</script>
</script>
    <title>+Saúde</title>
</head>
 <body>
 <a href="#top" class="glyphicon glyphicon-chevron-up"></a>
 <div id="menu"> 
 <a href="home.html"><img src="img/LOGO FINAL.fw.png" width="180px"/><a/>
 <nav id="menu">
 <ul>
 <li><a href="home.html"> Home </a></li>
 <li><a href="encontre.html">Encontre sua clínica </a></li>
 <li><a href="sobre_nos.html">Quem somos</a></li>
  </ul>
 </nav>
 
 
		<?php
	 
	
 
	ini_set("display_errors",0);
error_reporting(0);

if(!$_COOKIE["logado"]){
echo '
 
  <nav id="cl1">
 <ul>
 <li><a href="cadastro_usuario.php"> Cadastre-se </a></li>
 <li>|</li>
 <li><a href="login_geral.html">Login </a></li>
  </ul>
 </nav> ';
}
 ?>
 
 
 </div>
 <!--
 <div id="divBusca">
  <input type="text" id="txtBusca" placeholder=""/>
  
  <img  id="btnBusca" alt="Buscar"/>
</div>
 -->
 <div id="meio"> 
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
 </div> 
<div id="divBusca">
<br>
<br>
<table cellspacing="10">


   <tr>
    <td align="left">
    <input class="campo" type="text" name="Pesquisa" size="28" placeholder="Pesquise">
   </td>
 <td>

    <input class="pesquisa" type="submit" value="Pesquisar">
   </td>
  </tr>
  </table>
  </div>
  
<br>
<?php
$rs = $connection-> prepare("SELECT * FROM 	clinica order by nome");

	if($rs->execute())
	{
	while($registro = $rs->fetch(PDO::FETCH_OBJ))
	{

		echo '<div class="anuncio">';
		echo '<fieldset class="anuncio">';
		echo '<fieldset class="imagem">';
		echo '<a href="exemplo.php?w='.$registro->id_clinica.'"><img src="img/clinica.png" width="120px"> </a>';
		echo '</fieldset>';
		echo '<a href="exemplo.php?w='.$registro->id_clinica.'"><h2> '. $registro->nome . '</h2></a>';
		echo '</fieldset>';
		}	
}
?>








<br>

 <footer id="degrade">
 <a id="subirTopo">
  ^ <br>topo 
</a>
<br>
<img src="img/LOGO.fw.png" width="100px"/>
<p> <b>O +Saúde</b> é um serviço de Saúde que auxilia <br>usuários a encontrarem clínicas que mais se<br> adaptem a suas necessidades e assim então <br>marcarem suas consultas </p>
<nav id="menu2">
 <ul>
 <li><a href="home.html">Home </a></li>
 <li><a href="encontre.html">Encontre sua clínica </a></li>
 <li><a href="sobre_nos.html">Quem somos</a></li>
  </ul>
 </nav>
 
 
		<?php
	 
	
 
	ini_set("display_errors",0);
error_reporting(0);

if(!$_COOKIE["logado"]){
echo '
 
  <nav id="cl1">
 <ul>
 <li><a href="cadastro_usuario.php"> Cadastre-se </a></li>
 <li>|</li>
 <li><a href="login_geral.html">Login </a></li>
  </ul>
 </nav> ';
}
 ?>
 
 <h4> Siga nossas redes sociais:</h4>
 <nav id="sc">
 <ul>
 <li><a href="home.html"><img src="img/fb.png" width="45px"/></a></li>
 <li><a href="home.html"><img src="img/g+.png" width="45px"/></a></li>
 <li><a href="home.html"><img src="img/tw.png" width="45px"/></a></li>
</ul>
 </footer>
 <footer id="rodape">
 <ul>
 
 <li>© Copyright 2018</li>   
 <li>|  </li>
 <li><a href="home.html">Sua Consulta </a></li> 
 <li>|  </li>
 <li>Todos os direitos reservados</li>  
 </footer>
</body>
</html>