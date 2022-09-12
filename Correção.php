<html>
<head>
    <title>Exercícios de Fixação</title>
    <link href="./estilo.css" rel="stylesheet" />
</head>

<body>
    <p>
        -)Crie uma variável e atribua um array com os seguintes itens :
         20, 15, 30, 17, 8
    </p>
    <?php
        $meuArray = array(20, 15, 30, 17, 8);
    ?>


    <p>
        -)Faça uma função que imprima o array do primeiro exercício.
    </p>
    <?php
    function Imprimir($arrayParametro){
        echo "<pre>";
        print_r($arrayParametro);
        echo "</pre>";
    }
    Imprimir($meuArray);
    ?>



    <p>
        -)Crie uma função que some todos os itens do array do exercício 1;
    </p>
<?php

    function SomarArray($arrayParametro)
    {
        $soma = 0;
        for($i = 0; $i < count($arrayParametro); $i++)
        {
            $soma += $arrayParametro[$i];
        }    
        return $soma;
    }

    echo "<br>Soma do array é: ". SomarArray($meuArray)."<br>";
?>

    <p>
        -)Utilizando o For imprima a tabuada do 144.
    </p>

    <?php 
        for($i = 0; $i <= 10; $i++)
        {
            echo "<br> 144 X ".$i." = ".(144*$i)."<br>";
        }

    ?>

    <p>
        -)Exiba na tela todos os itens pares de 251 de 544.
    </p>
<?php
    for($i = 251; $i <= 544; $i++)
    {
        if($i % 2 == 0)
        {
            echo "<br>".$i." é par";
        }
    }
?>
    <p>
        -) Adicione 3 novos itens no array do exercício 1 
        usando a função rand(-10,10).
    </p>
    <?php
        $meuArray[ count($meuArray) ] = rand(-10,10);
        array_push($meuArray, rand(-10,10) );
        $meuArray[count($meuArray)] = rand(-10,10);

        //alternativas
        array_push($meuArray, rand(-10,10) );
        array_push($meuArray, rand(-10,10) );
        array_push($meuArray, rand(-10,10) );

        for($i = 0; $i< 3;$i++){
            array_push($meuArray, rand(-10,10) );
        }
        Imprimir($meuArray);
?>
    <p>
        -)Faça uma função que receba a porcentagem e um numero e 
        calcule a porcentagem desse numero.
    </p>
        <?php

        function CalcularPorcentagem($porcentagem, $numero)
        {
            return $numero * ($porcentagem /100);
        }

        echo "<br> 24% de 120 é ". CalcularPorcentagem(24,120)."<br>";
?>



    <p>
        -)Exiba na tela a quantidade de :
            pares,
            impares,
            negativos e 
            positivos do array do exercício 1
    </p>
    <?php 
    $cont_pares = 0;
    $cont_impares = 0;
    $cont_positivos = 0;
    $cont_negativos = 0;
        for($i = 0; $i < count($meuArray); $i++)
        {
            if($meuArray[$i] >= 0)
            {
                $cont_positivos++;
            }else{
                $cont_negativos++;
            }
            if($meuArray[$i] % 2 == 0){
                $cont_pares++;
            }else{
                $cont_impares++;
            }
        }    
        echo "<br> Pares:".$cont_pares." Impares:".$cont_impares;
        echo "<br> Positivos:".$cont_positivos." Negativos:".$cont_negativos;

?>
    <p>
        -)Calcule a média do array do exercício 1
    </p>

    <?php
        $somaArray = SomarArray($meuArray);
        echo "<br> A média do meuArray é: ".($somaArray/count($meuArray));
    ?>
</body>

</html>