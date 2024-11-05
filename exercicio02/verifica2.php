<?php 
    $ano = $_POST['anoNascimento'];
    $anoAtual = date('Y');

    $idade = $anoAtual - $ano;
    echo "sua idade é: $idade";

?>