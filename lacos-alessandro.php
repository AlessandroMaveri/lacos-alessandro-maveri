<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$Array = [
    
    'Informática' => [
        'Alessandro' =>  [
            'PSW' => [ 
                'nota 1' => 10.0,
                'nota 2' => 7.4
            ],
            'BD' => [ 
                'nota 1' => 8.0,
                'nota 2' => 9.4
            ],
            'ASW' => [ 
                'nota 1' => 6.0,
                'nota 2' => 7.9
            ]

        ],
        'Heloisa' =>[
            'PSW' => [ 
                'nota 1' => 8.0,
                'nota 2' => 9.4
            ],
            'BD' => [ 
                'nota 1' => 10.0,
                'nota 2' => 9.4
            ],
            'ASW' => [ 
                'nota 1' => 9.0,
                'nota 2' => 5.9
            ]

        ],
        'mauricio' =>[
            'PSW' => [ 
                'nota 1' => 5.0,
                'nota 2' => 9.4
            ],
            'BD' => [ 
                'nota 1' => 4.0,
                'nota 2' => 9.4
            ],
            'ASW' => [ 
                'nota 1' => 8.9,
                'nota 2' => 7.9
            ]

        ],
        'jose' =>[
            'PSW' => [ 
                'nota 1' => 10.0,
                'nota 2' => 7.4
            ],
            'BD' => [ 
                'nota 1' => 8.0,
                'nota 2' => 9.4
            ],
            'ASW' => [ 
                'nota 1' => 6.0,
                'nota 2' => 7.9
            ]

        ]
            ],
    'Agricultura' => [
        'Amilton' => [
            'Solo' => [ 
                'nota 1' => 10.0,
                'nota 2' => 7.4
            ],
            'BD' => [ 
                'nota 1' => 8.0,
                'nota 2' => 9.4
            ],
            'ASW' => [ 
                'nota 1' => 6.0,
                'nota 2' => 7.9
            ]

        ],
        'Fred' => [
            'Solo' => [ 
                'nota 1' => 8.0,
                'nota 2' => 9.4
            ],
            'Adubagem' => [ 
                'nota 1' => 10.0,
                'nota 2' => 9.4
            ],
            'Geografia' => [ 
                'nota 1' => 9.0,
                'nota 2' => 5.9
            ]

        ],
        'Pedro' =>[
            'Solo' => [ 
                'nota 1' => 5.0,
                'nota 2' => 9.4
            ],
            'Adubagem' => [ 
                'nota 1' => 4.0,
                'nota 2' => 9.4
            ],
            'Geografia' => [ 
                'nota 1' => 8.9,
                'nota 2' => 7.9
            ]

        ],
        'Paula' =>[
            'Solo' => [ 
                'nota 1' => 10.0,
                'nota 2' => 7.4
            ],
            'Adubagem' => [ 
                'nota 1' => 8.0,
                'nota 2' => 9.4
            ],
            'Geografia' => [ 
                'nota 1' => 6.0,
                'nota 2' => 7.9
            ]
        
        ]
            ],


];
foreach ($Array as $cursos => $alunos) {
    echo "<mark>$cursos</mark> <br>";
    foreach ($alunos as $aluno => $disciplinas){
        echo "<br><strong>$aluno</strong> <br>";
        foreach ($disciplinas as $disciplina => $notas){
            echo "<strong>$disciplina</strong><br>";
            foreach ($notas as $nota => $fim){
                echo "$nota <strong>$fim</strong><br>";
            }
            echo "<br>";
        }
        echo "<hr>";

    }
    echo "<hr>";

};
    ?>
    
</body>
</html>