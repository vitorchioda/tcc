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
			
				$erro = null;
	$valido = false;
	if(isset($_REQUEST["validar"]) && $_REQUEST["validar"]==true)
	{
	
		if(strlen(utf8_decode($_POST["nome"]))<1)
		{
			$erro = "Preencha o campo nome corretamente(1 ou mais caracteres)";
		}
		else
		{
			$valido = true;
			/* Inicio*/
			

			
			$sql="INSERT INTO cliente (nome,cpf,email,senha)values(?,?,?,?)";
			$stmt=$connection->prepare($sql);
			$stmt->bindParam(1, $_POST["nome"]);
			$stmt->bindParam(2, $_POST["cpf"]);
			$stmt->bindParam(3, $_POST["email"]);
			$stmt->bindParam(4, $_POST["senha"]);
			$stmt->execute();
			
			if($stmt->errorCode() != "00000"){
				$valido=false;
				$erro="Erro código". $stmt->errorCode() . ": ";
				$erro=implode(", ", $stmt->errorInfo());
			}

		/*Fim */
		}
		
		
		
	}
			
	?>
<html>
 <head>
 <title>  Cadastro de Usuários </title>
   <link rel="stylesheet" type="text/css" href ="usuario.css">
   <link rel="icon" href="img/LOGO.fw.png" type="image/x-icon" />
   <link href="https://fonts.googleapis.com/css?family=Niramit|Roboto+Condensed" rel="stylesheet">
 </head>

 <body>
			<?php
			if($valido == true)
			{
				setcookie("logado","1");
				setcookie("nome",$_POST["nome"]);
				header("Location:home.html");
				
			}
			else
			{
			
			if(isset($erro))
			{
				echo $erro . "<br /><br />";
			}
			?>
<!-- DADOS PESSOAIS-->
<fieldset>
<form method=POST action="?validar=true">
 <table cellspacing="10">


   <tr>
    <td align="left">
	 <label for="nome">Nome</label><br>
    			<p><input type=text name=nome
			<?php if(isset($_POST["nome"])) {echo "value= '" . $_POST["nome"] . "'";} ?>
			></p>
   </td>
	
   <td align="left">

      <label>CPF</label><br>
    			<p><input type=text name=cpf
			<?php if(isset($_POST["cpf"])) {echo "value= '" . $_POST["cpf"] . "'";} ?>
			></p>
   </td>
  </tr>

   <tr>
    <td align="left">
	 <label for="mail">E-mail</label><br>
    			<p><input type=text name=email
			<?php if(isset($_POST["email"])) {echo "value= '" . $_POST["email"] . "'";} ?>
			></p>
   </td>
<br />

<table cellspacing="10">
  <tr>
  <td align="left">
    <label for="pass">Senha: </label><br>
    			<p><input type=password name=senha
			<?php if(isset($_POST["senha"])) {echo "value= '" . $_POST["senha"] . "'";} ?>
			></p>
   </td>
  </tr>
 
 </table>
 
<br />
<a href="home.html"><input class="volta" type="submit" value="Voltar"></a> <a src="home.html"><input type=submit value="Enviar"></a>

</form>
</fieldset>
<?php
}
?>
 </body>
</html>