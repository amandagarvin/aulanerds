<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include'conexao.php';
$nome = $_GET["nome"];
$idade = $_GET["idade"];
$email  = $_GET["email"];
$materia = $_GET["mat"];


$sql = "insert into aluno (nome,idade,email,mat) values ('$nome','$idade','$email','$materia');"; 
mysql_query($sql);
echo mysql_error();
mysql_close();

echo "<script>document.location = 'index.php'</script>";
