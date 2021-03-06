﻿ <!DOCTYPE html>

 <html>
 <head>
  <meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="home.css">
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
 <li><a href="encontre.php">Encontre sua clínica </a></li>
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
}else{
	
	echo '
 
  <nav id="cl1">
 <ul>
 <li><a href="?acao=deslogar">Deslogar </a></li>
  </ul>
 </nav> ';
}
 ?>
 
 </div>
 <div id="banner">
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</p>
 </div>
 <div id="banner2">
 <h1>Bem-vindo(a) ao +Saúde!</h1>

<p>A saúde é nossa principal riqueza, e por isso devemos sempre mantê-la em dia. <br>Para isso o +Saúde te auxiliará neste processo, pois aqui você encontrará a clínica <br>médica que mais se adeque a sua necessidade, e com isso será possível marcar<br> consultas. Tudo isso de uma maneira rápida e eficaz.</p>
</div>
<section id="corpo">
<br>
<h1>Auxiliando você a cuidar de sua saúde</h1>

<p>O +Saúde é uma plataforma que tem o intuito de auxiliar pessoas a cuidarem de sua saúde.<p> O sistema permite que o paciente encontre a clínica ideal para a sua necessidade, <p>assim então o paciente poderá marcar a consulta totalmente on-line.</p>
</section>
<div id="q1">
<h3>Cadastre-se </h3>
<img src="img/div1.png" />
<p> Um simples processo, onde você fornece seus dados para uma melhor navegação na plataforma.</p>
</div>
<div id="q2">
<h3> Encontre sua Clínica </h3>
<img src="img/div1.png" />
<p>Logo após o cadastro, você procura a clínica ideal para <br>te atender.</p>
</div>
<div id="q3">
<h3> Agende sua consulta</h3>
<img src="img/div1.png" />
<p>Ao encontrar a sua clínica você deve marcar +Saúde e cuidar de sua saúde.</p>
</div>
<section id="sc">
<br>
<h1> Por que o +Saúde?</h1>

<p>
<p>O +Saúde é a maneira mais facil e rapida de se marcar consultas. O sistema conta <p>com diversas ferramentas que faciltam a vida do usuário tais como: sistema de <p>localização, diversos filtros, sistema de usabilidade, entre outros. </p> 

</section>
<br>
<br>
<br>


<section id="vel">

<img src="img/velocidade.png" width="100px"/>
<h2> Facilidade</h2>
<p>Nossa plataforma facilita sua vida, já que você podera fazer todo o processo de marcar consultas via on-line, tudo de maneira rapida e eficaz.</p>
</section>
<section id="op">
<img src="img/clinica.png" width="100px"/>
<h2>Variabilidade</h2>
<p>Aqui você encontrara diversas clínicas de divesas especialidades, assim tendo uma maior variabilidade na hora da escolha.</p>
</section>
<section id="tempo">
<img src="img/relogio.png" width="100px"/>
<h2> Economia de tempo e dinheiro</h2>
<p>O +Saúde economiza seu tempo, já que você fará menos processos para marcar consultas. O sistema economiza seu dinheiro, pois este te auxilia a encontrar clínicas que mais se adaptem as suas condições</p>
</section>
<br>
 <footer id="degrade">
 <a id="subirTopo">
  ^ <br>topo 
</a>
<br>
<a href="home.html"><img src="img/LOGO.fw.png" width="100px"/></a>
<p> <b>O +Saúde</b> é um serviço de Saúde que auxilia <br>usuários a encontrarem clínicas que mais se<br> adaptem a suas necessidades e assim então <br>marcarem suas consultas </p>
<nav id="menu2">
 <ul>
 <li><a href="home.html">Home </a></li>
 <li><a href="encontre.html">Encontre sua clínica </a></li>
 <li><a href="sobre_nos.html">Quem somos</a></li>
  </ul>
 </nav>
 <nav id="cl">
 <ul>
 
 <li><a href="cadastro_geral.html">Cadastre-se</a></li>
 <li><a href="login_geral.html">Login </a></li>
  </ul>
 </nav>
 
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
 <li><a href="home.html">+Saúde </a></li> 
 <li>|  </li>
 <li>Todos os direitos reservados</li>  
 </footer>
</body>
</html>