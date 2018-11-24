<!DOCTYPE html>
<?php

  try{
				$connection=new PDO("mysql:host=localhost;dbname=testetcc","root","root");
				$connection->exec("set names utf8");
			}
			catch(PDOException $e){
					$connection=new PDO("mysql:host=localhost;dbname=testetcc","root","");
				$connection->exec("set names utf8");
			}

?>
 <html>
 <head>
  <meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="exemplo.css">
<link rel="icon" href="img/LOGO.fw.png" type="image/x-icon" />
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Hind+Siliguri" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
    <title>+Saúde</title>
	
	
		<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
		<script language="javascript" type="text/javascript">
		$(document).ready(function(){
			$('#marcarconsulta').click(function(){
				$('#lightbox').show(1000);
				$('body').css('background-color','	#DCDCDC');
				$('footer').css('background-color','#DCDCDC');
				$('#menu').css('background-color','	#DCDCDC');
			});
			
			$('#fechar').click(function(){
				$('#lightbox').hide(1000);
				$('body').css('background-color','white');
				$('footer').css('background-color','#1E90FF');
				$('#rodape').css('background-color','black');
				$('#menu').css('background-color','#1E90FF');
			});
		
		});
	
		</script>
	
	
	
		<div id="lightbox" class="lightbox"> 
		
		<a id='fechar'>X</a>
		
		
		
		
		<?php
		
		$rs = $connection-> prepare("SELECT * FROM 	consulta where clinica=? and ocupada=0");
		$rs->bindParam(1, $_REQUEST["w"]);
		setcookie("w",$_REQUEST["w"]);
			if($rs->execute()){
			while($registro = $rs->fetch(PDO::FETCH_OBJ)){
				echo "<div class='consulta'>";
				echo " Medico = "  . $registro->medico ;
				echo " <br><br>Data = "  . $registro->data ;
				echo " <br><br>Horario = "  . $registro->horario ;
				echo " <a href='?c=".$registro->id_consulta."'> agendar</a>  ";
				echo "</div>";
				
			}
			}
		
		
		if(isset($_REQUEST["c"])){
			$sql="update  consulta set paciente=?,ocupada=1  where id_consulta=?";
			$stmt=$connection->prepare($sql);
			$stmt->bindParam(1, $_COOKIE["nome"]);
			$stmt->bindParam(2,$_REQUEST["c"]);
			$stmt->execute();
			echo "<body onload='window.history.back();'>";
			if($stmt->errorCode() != "00000"){
				$valido=false;
				$erro="Erro código". $stmt->errorCode() . ": ";
				$erro=implode(", ", $stmt->errorInfo());
			}
			
			
		
		}
		
		
		?>

		
		
		
		
		
		
		
		
		
		
		
		</div>

		
		
		</head>
 <body>
 <a href="#top" class="glyphicon glyphicon-chevron-up"></a>
 <div id="menu"> 
 <a href="home.html"><img src="img/LOGO FINAL.fw.png" width="180px"/><a/>
 <nav id="menu">
 <ul>
 <li><a href="index.php"> Home </a></li>
 <li><a href="encontre.php">Encontre sua clínica </a></li>
 <li><a href="sobre_nos.php">Quem somos</a></li>
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
 <br>
 
 <?php
 

		
   try{
				$connection=new PDO("mysql:host=localhost;dbname=testetcc","root","root");
				$connection->exec("set names utf8");
			}
			catch(PDOException $e){
					$connection=new PDO("mysql:host=localhost;dbname=testetcc","root","");
				$connection->exec("set names utf8");
			}
 
 
 $rs=$connection->prepare("SELECT * FROM clinica WHERE id_clinica=?");
		$rs->bindParam(1, $_REQUEST["w"]);
		if ($rs->execute()){
			if($registro=$rs->fetch(PDO::FETCH_OBJ)){

				
				echo '<fieldset id="exe1">';
				echo '<fieldset id="img">';
				echo '<img src="img/clinica.png" width="150px">';
				echo '</fieldset>';
 
 
				echo '<h2>' .$registro->nome.' </h2>';
				echo '<br>';
 
				//descrição da clinica
				echo '<p>Somos uma clínica especializada em Odontologia, estamos localizados em São Mateus venha nos visitar. Somos referência na grande São Paulo.</p>';
				echo '<a><input type="submit" value="Marcarconsulta" id="marcarconsulta" class="pro"></a>';
				echo '</fieldset>';
				echo '<br>';
				
				
			}
		}
	?>
	
	

 









 <footer id="degrade">
<br>
<br>
<a href="index.php"><img src="img/LOGO.fw.png" width="100px"/></a>
<p> <b>O +Saúde</b> é um serviço de Saúde que auxilia <br>usuários a encontrarem clínicas que mais se<br> adaptem a suas necessidades e assim então <br>marcarem suas consultas </p>
<nav id="menu2">
 <ul>
 <li><a href="index.php"> Home </a></li>
 <li><a href="encontre.php">Encontre sua clínica </a></li>
 <li><a href="sobre_nos.php">Quem somos</a></li>
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
 <li><a href="index.php"><img src="img/fb.png" width="45px"/></a></li>
 <li><a href="index.php"><img src="img/g+.png" width="45px"/></a></li>
 <li><a href="index.php"><img src="img/tw.png" width="45px"/></a></li>
</ul>
 </footer>
 <footer id="rodape">
 <ul>
 
 <li>© Copyright 2018</li>   
 <li>|  </li>
 <li><a href="index.php">Sua Consulta </a></li> 
 <li>|  </li>
 <li>Todos os direitos reservados</li>  
 </footer>
 
</body>
</html>