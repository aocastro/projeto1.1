<?php
include('../../../conexao/conn.php');

$sql = "SELECT * FROM disciplina";

$resultado= mysqli_query($conecta, $sql);
if($resultado && mysqli_num_rows($resultado)>0){

    while($linha = mysqli_fetch_assoc($resultado)){
        $dados[] = array_map('utf8_encode', $linha);


    }
}
    else{
        $dados=array('erro'=> 'não foi possivel buscar resultados');
    }

echo json_encode($dados);