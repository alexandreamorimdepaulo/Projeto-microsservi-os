<?php
//Banco de dados
$servername="localhost";
$username = "root";
$password = "sua-nova-senha";
$db_name = "username";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
echo "falha na conexão: ".mysqli_connect_error();
endif;
