<html>
<header>
	<title>Pagna do Leilson</title>

	<style type="text/css">
		body{

			background: #ccc;
		}

		.conteudo{
			max-width: 90%;
			margin: auto;
			background: #aaccaa;
		}
		.nome{
			font-size: 16px;
			color: #0099ff;
		}
		.conteudo .titlo{
			/*margin-top: 50px;*/
			font-family: sans-serif;
			font-style: oblique;
			color: #00000;

		}
		.forme{
			border:solid;
			
		}
		#botao{
			border-bottom: solid;
			border-color: #ddeedd;
			padding: 10px;
			width: 100px;
			border-radius: 5px;
			text-align: center;
			font-style: 16px;
			color: #552299;
			margin-left: 100px;


		}
		.rodape{
			width: 100%;
			position: absolute;
			background: #ddaacc;
			text-align: center;
   			 font-family: sans-serif;
   			 padding: 20px;

		}
		.end_rodape{
			position: relative;
			float: left;
			width: 45%; 
		}
		.contato_rodape{
   			 text-align: center;
			position: relative;
			float: right;
			width: 45%;			
		}

	</style>
</header>

<body>
	<div class="conteudo">
	<center><h1 class="titlo"><u>Seja bem vindo a minha página!</u></h1></center>
<!--<video autoplay="#" controls="30"></video> -->
<!--dio autoplay="#" controls="30" src=""></audio>-->
<div class="forme">
<form >
	<p class="nome">Nome: <input type="text" size="30" name="nome"><br><p>
	Endereço: <input type="text" size="25" name="endereco"> N° <input type="text" size="6" name="numero"><br>
	Cep: <input type="text" size="10" name="cep" placeholder="99999-999" minlength="9"><br>
	Data Nacimento: <input type="date" name="dataNasc" ><br>
	<hr>
	<input type="submit" value="Enviar" id="botao">



</form>
</div>
<?php
if(isset($_GET)){
echo '<table class="forme">';
foreach ($_GET as $key => $value) {
	//echo "nome do campo: ".$key."<br>";

	
	echo "<tr>";
    echo "<td>";
	echo "valor do campo: ".$value."<br><br>";
	 echo "</td>";
	echo"</tr>";
	
}
echo"</table>";
}

?>
</div>
<hr>
	<div class="rodape">
		
		<div class="end_rodape">
			enderço: Rua Basil Camerona <br>
			CEP: 04316025 <br> 
			Cidade: São Paulo  

		</div>
		<div class="contato_rodape">
			Contato <br>
		    Telefone: 11 969083481 <br>
			Email: leilsonalvesmartins@gmail.com


		</div>
	</div>
</body>
</html>