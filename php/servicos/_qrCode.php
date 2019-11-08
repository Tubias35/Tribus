<?php

    include_once('../Conexao/Conexao.php');
    $conexao = new Conexao();
    $con = $conexao->conectar();

    //Armazena as variaveis
    $projeto = $_POST['projeto'];
    $tema = $_POST['tema'];
    $totalAlunos = $_POST['totalAlunos'];
    
    //Quantidade de Alunos
    $query = "SELECT COUNT(*) AS qtde from alunos WHERE projeto = ".$projeto." AND perfil IS NOT NULL";
    $stmt = $con->prepare($query);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_OBJ);
    $qtdeAlunos = $row->qtde;


    
    //Verifica quantidade de Alunos
    if($qtdeAlunos == $totalAlunos){
        header("Location: ../../biuldSquad.php?projeto=".$projeto."&qtdeAlunos=".$qtdeAlunos);
    } else{
        header("Location: ../../qrCodePage.php?projeto=".$projeto."&tema=".$tema."&qtdeAlunos=".$qtdeAlunos."&totalAlunos=".$totalAlunos);
    }  
    
?>