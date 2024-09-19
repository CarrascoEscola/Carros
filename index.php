<?php
/* conexao com bd */
$servername = "baseteste.srv.br";//servidor
$username = "basetestesrv_u_andre_carrasco";//seu usuario
$password = "Thor270908";//sua senha
$database = "baseteste_andre.carrasco";//sua base de date_isodate_set

$conexao = mysqli_connect($servername,$username,$password, $databasse);

if (!$conexao){
    die("Falhou a conexao".mysqli_connect_error());
}else{
    echo "conectado com sucesso";
} // checa se a conexao com o banco de dados foi um sucesso.
?>