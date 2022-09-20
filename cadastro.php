<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luz Ingá</title>
</head>
<body>
    <h2>Formulário</h2>
    <?php
    if(isset($_session['msg']))
        echo $_session['msg'];
        unset ($_session['msg']);

    ?>


	<form id="formulario" action="envio.php" method="post" >     
        
        
        <label>Nome: </label> <br>
		<input type="text" id="nome" name="nome" required placeholder="Digite seu nome" size="30"> <br>
		<label>Senha:</label> <br>
		<input type="password" id="senha" name="senha" required placeholder="Crie uma senha"  size="30" lenght="5"> <br>
        <label>Telefone para Contato:</label>
        <input type="text" name="contato" id="contato" size="30"   required placeholder="Apenas Números" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" /></label>
        <br />
        <label>Endereço:</label> <br>
        <input input type="text" name="endereco" id="endereco"  size="30" required placeholder="Digite Seu Endereço"></label>
        <br />
        <label>Cidade:</label> <br>
        <input type="text" name="cidade" id="cidade" size="30" required placeholder="Sua Cidade" /></label ><br>
        <label>Mensagem:</label> <br> 
        <input name="mensagem" id="mensagem"   rows="3"  cols="50"   placeholder="Deixe-nos uma mensagem" /></label>
        <br>
        <label><h3>Selecione os produtos que deseja comprar:</h3>
        <input type="checkbox" name="produtos" value="luminaria1" /> 4 Lustre
        Luminária Diamante Cobre Na Canopla Redonda Vintage (R$ 500,00) <br>
        
        <input type="checkbox" name="produtos" value="luminaria2" /> Luminária
        Pendente Montereal LED (R$ 460,00)<br/>
        </label>

          
        <input type="checkbox" name="produtos" value="luminaria3" /> Luminária
        Pendente Montereal LED (R$ 460,00)<br/>
        </label>

          
        <input type="checkbox" name="produtos" value="luminaria0" /> Luminária
        (R$ 300,00)<br/>
        </label>

          
        <input type="checkbox" name="produtos" value="luminaria1" /> Luminária
         Montereal  (R$ 250,00)<br/>
        </label>

          
        <input type="checkbox" name="produtos" value="luminaria2" /> Luminária
       LED (R$ 900,00)<br/>
        </label>



          
        <input type="checkbox" name="produtos" value="luminaria2" /> Luminária
        Simples (R$ 100,00)<br/>
        </label>
            
		
		<input id="button"type="submit" value="Enviar" onclick="logar();  " >   
		<input type="reset" name="Limpar dados">
	</form>
	<a href="index.html" id="voltar">Voltar</a>
    <script src="java.js"></script>

    
</body>
</html>