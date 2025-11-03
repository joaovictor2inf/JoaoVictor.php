<?php

    $mes=array();

    $mes=['janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho','julho', 'agosto', 'setembro', 'outubro', 'novembro' , 'dezembro'

    ];

    foreach ($mes as $key => $value ) {
        echo $key.": ".$value."<br>";
    }
    echo "<hr>";
    echo 'VAR_DUMP';
    var_dump($mes);
    echo "<hr>";
    echo 'posição 1';
    echo $mes[2];

    function dataAtual(): string
    {
        $daiMes = date("d");
        $diaSemana = date("w");
        $mes = date("m");
        $ano = date("Y");

        $nomeDosMeses = ['janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho','julho', 'agosto', 'setembro', 'outubro', 'novembro' , 'dezembro'];

        $nomeDiaSemana = [ 'domingo', 'segunda-feira', 'terça-feira', 'quarta-feira', 'quinta-feira', 'sexta-feira' , 'sábado'];
        $dataAtual =  $diaMes. '.' . $nomeDiaSemana, $ano);
    }