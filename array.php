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
        $diaMes = date("d");
        $diaSemana = date("w");
        $mes = date("m");
        $ano = date("Y");

        $nomeDosMeses = ['janeiro', 'fevereiro', 'marco', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'];

        $nomeDiasDaSemana = ['domingo' , 'segunda-feira' , 'terça-feira' , 'quarta-feira' , 'quinta-feira' , 'sexta-feira' , 'sabado'];

        $dataFormatada = $nomeDiasDaSemana[$diaSemana] . ', ' . $diaMes . ' de ' . $nomeDosMeses[$mes - 1] . ' de ' . $ano;

        echo 'Dia do mês: ' . $diaMes . '<br>' . 'Dia Semana: ' . $diaSemana . '<br>' . 'Mês: ' . $mes . '<br>' . 'Ano: ' . $ano . '<br>';
        return $dataFormatada;
    }
echo dataAtual();