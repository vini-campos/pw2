<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="css/exemplo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        h2 {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <h1>Variáveis e constantes PHP</h1>


    <?php
    //variável
    /*

    */
    $a = 8;  //int
    $b = 1.1; //float
    $c = "a"; //string
    $d = 'a'; //string
    $e = null; //nulo
    $f = false; //bool
    
    //CONSTANTE
    define('MINHA_CONST', "Teste");
    const Teste = "adalberto";
    //Escreverndo na tela
    echo "o valor de \$A é " . $a;
    echo "\t<p>o valor de B é $b</p>\n";
    echo '\t<p>o valor de B é $b</p>\n';
    print "\t<p>o valor de A + B é " . $a + $b . "</p>\n";

    echo "O valor de const é " . Teste;

    //Objeto DateTime
    $d = new DateTime(
        "now",
        new DateTimeZone("America/Sao_Paulo")
    );
    echo "\t<p>A data e hora atual é {$d->format("d/m/Y - H:i:s")}</p>\n";

    ?>

    <h2>Estruturas de decisão</h2>
    <?php
    if ($a > $b) {
        echo "\t<p>Verdade</p>";
    } elseif ($a == $b || $b < $c) {
        echo "\t<p>A é igual a B</p>\n";
    }
    //while($a > $b){ echo "\t<p>Teste</p>\n";}
    ?>

    <h2>Agnaldo</h2>

    <?php
    echo "";
    switch ($a) {
        case 1: {
            echo "\t<p>o valor é 1!</p>\n";
        }
            break;

        case 2:
            echo "\t<p>o valor é 2!</p>\n";
            break;

        case 3:
            echo "\t<p>o valor é 3!</p>\n";
            break;

        case 4:
            echo "\t<p>o valor é 4!</p>\n";
            break;

        case 5:
        case 6:
        case 7:
        case 8:
            echo "\t<p>o valor está entre 5 e 8!</p>\n";
            break;
        default:
            echo "\t<p>o valor não está entre 1 e 8!</p>\n";
            break;
    }
    ?>

    <h1>Estruturas de repetição</h1>
    <h2>Do.. While</h2>
    <?php
    $i = 0;
        do {
            echo "\t<p>O valor de \$i é igual a $i</p>\n";
            echo "\t<p>A data e hora atual é {$d->format("d/m/Y - H:i:s")}</p>\n";
            $i++;
            if ($i == 10) {
                break;
                //contnue
            }

        } while ($a <= 10);
    ?>
    <h2>foreach</h2>
    <?php
        $vet = ["Zeca", "Pedreiro", "15997233477"];
        $vet2 = array("Zeca", "Pedreiro", "15997233477");
        $vet2[] = "Itu";
        array_push($vet2 ,"SP", "45374573955654");
        foreach ($vet as $value) {
            echo "\t<p>O valor aual é $value</p>\n";
        }
    ?>

    <h2>For com vetor indexado</h2>
    <?php
        $vet = ["Zeca", "Pedreiro", "15997233477"];
        $vet2 = array("Zeca", "Pedreiro", "15997233477");
        $vet2[] = "Itu";
        for ($i = 0; $i < count($vet2); $i++) {
            echo "\t<p>O valor da " . $i + 1 .
                "º posição do vetor \$vet2 é {$vet2[$i]}</p>\n";
        }
    ?>

        <h2>Foreach com vetor associativo</h2>
        <?php
        $vet_assoc = ["id" => "1", "nome" => "Tião", "Telefone" => "15997233488"];
        foreach ($vet_assoc as $key => $value) {
            echo "\t<p>O valor de $key do vetor \$vet_assoc é $value</p>\n";
        }
        echo "\t<p>Valor avulso de \$vet_assoc é {$vet_assoc["nome"]}</p>\n";
    ?>

    <h2>For com vetor bidimensional</h2>
    <?php
        // $cars = array (
        // array("Volvo", 22, 18),
        // array("BMW", 15, 13),
        // array("Saab", 5, 2),
        // array("Land Rover", 17, 15)
        // );
        $cars = [
            ["Volvo", 22, 18],
            ["BMW", 15, 13],
            ["Saab", 5, 2],
            ["Land Rover", 17, 15],
            "Agnaldo",
        ];
        echo "\t<p>Valor avulso de \$cars é {$cars["1"]["1"]}</p>\n";
        for ($i=0; $i< count($cars); $i++) {
            if (is_array($cars[$i])){
                for ($j=0; $j < count($cars[$i]) ; $j++) {
                    echo "\t<p>O valor de $j do vetor \$cars é {$cars["$i"]["$j"]}</p>\n";
                }
            }
            else{
                echo "\t<p>O valor de $i do vetor \$cars é {$cars["$i"]}</p>\n";
            }
        };

        
    ?>
    <script src="js/bootstrap.bundle.min.js">

    </script>
</body>

</html>