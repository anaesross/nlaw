<?php
  //1 – Definimos Para quem vai ser enviado o email
  $para = "tbc@nlaw.com.br";
  //2 - resgatar o nome digitado no formulário e  grava na variavel $nome
  $nome = $_POST['nome'];
  // 3 - resgatar o assunto digitado no formulário e  grava na variavel //$assunto
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
   //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
  $mensagem  =  "<strong>Nome: </strong>" .$nome;
  $mensagem .= "<br><strong>Contato: </strong>" .$telefone;
  $mensagem .= "<br><strong>Enviado por: </strong>" .$email;
  $mensagem .= "<br><strong>Mensagem: </strong>" .$_POST['mensagem'];  
//5 – agora inserimos as codificações corretas e  tudo mais.
  $headers =  "Content-Type:text/html; charset=UTF-8\n";
  $headers .= "From:  nlaw.com.br<tbc@nlaw.com.br>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
  $headers .= "X-Sender:  <tbc@nlaw.com.br>\n"; //email do servidor //que enviou
  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers .= "Return-Path: <".$email.">\n";
  $headers .= "MIME-Version: 1.0\n";
 
mail($para, $mensagem, $headers);  //função que faz o envio do email.
echo "<script>alert('Mensagem enviada com sucesso!')</script>";
echo "<script>window.location = 'blog.html';</script>";


  ?>