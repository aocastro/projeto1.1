<?php
 
 
include('../../conexao/conn.php');
 
$nome = $_REQUEST['nome'];
$professor = $_REQUEST['professor'];
$nota = $_REQUEST['nota'];
 
 
if(strlen($nome) == 0 || strlen($professor) == 0){
$dados = array(
'tipo' => 'alert-warning',
'mensagem' => 'Por favor preencha todo o formulário!'
);
}else{

$sql = "INSERT INTO disciplinas (nome, professor, nota) VALUES ('".$nome."', '".$professor."', '".$nota."')";

if(mysqli_query($conecta, $sql)){
$dados = array(
'tipo' => 'alert-success',
'mensagem' => 'A disciplina '.$nome.', foi salva com sucesso!'
);
}else{
$dados = array(
'tipo' => 'alert-danger',
'mensagem' => 'Deu ruim....'.mysqli_error($conecta)
);
}
}
 
echo json_encode($dados);