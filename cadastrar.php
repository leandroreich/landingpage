<?php

//include_once 'Connections/conexao.php'; testar so php sem db

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
$recebemail = filter_input(INPUT_POST, 'recebemail', FILTER_SANITIZE_STRING);


echo "Nome:" . $nome . "<br>" ;
echo "Email:" . $email . "<br>" ;
echo "Telefone:" . $telefone . "<br>" ;
echo "cidade:" . $cidade . "<br>" ;
echo "Estado:" . $estado . "<br>" ;
echo "CEP:" .$cep . "<br>";
echo "Data:" .$data . "<br>";
echo "Recebe Eemail: . $recebemail ."

/*$query_cadastros = "INSERT INTO tbl_cadastros (nome, email, telefone, cidade, estado, cep, data) VALUES ('$nome', '$email', '$telefone', '$cidade', '$estado', '$cep', '$data')";
mysql_pconnect($conexao, $query_cadastros);

if(mysql_pconnect_id($conexao)){
	echo true;
}else{
	echo false;
}*/
?>