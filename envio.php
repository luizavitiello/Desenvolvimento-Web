<?php

  session_start();
  include_once("conexao.php");

  $nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);

  $senha=filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);

  $contato=filter_input(INPUT_POST,'contato',FILTER_SANITIZE_STRING);

  $endereco=filter_input(INPUT_POST,'endereco',FILTER_SANITIZE_STRING);

  $cidade=filter_input(INPUT_POST,'cidade',FILTER_SANITIZE_STRING);



  $result_usuario= "INSERT INTO cadastro (nome,senha,contato,endereco,cidade) 

  VALUES ('$nome','$senha','$contato','$endereco','$cidade')";

  $resultado_usuario=mysqli_query($conn,$result_usuario );


  if(mysqli_insert_id($conn)){
    $_SESSION['msg']="<p style= 'color : green ;' >Usuário Cadastrado com Sucesso</p>";
    header("location:cadastro.html");

  }else{
    $_SESSION['msg']="<p style= 'color : red;' >Erro! Usuário não cadastrado</p>";
    header("location:cadastro.html");



  }

  