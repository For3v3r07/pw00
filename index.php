<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>jg</title>
</head>
<body>
<center>
    <?php
         $usuario = [
             'são paulo' => [
            'nome' => 'sp',
            'populacao' => 100000,
            'cidade'   => ['cerquilho','tiete','boituva'],
            'cidade-c' => ['bairro: ceap(rua:ufa, zona:norte)','tiro de guerra(rua:212, zona:norte),'],
            'cidade-t' => ['bairro: são Guilherme(rua: dia azul, zona:sul),','são pedro(rua: kallidade, zona:sul)'],
            'cidade-b' => ['bairro: rock(rua: tipo gringa, zona:oeste)','cala(rua:mariachi, zona:oeste)'],
            'bairro-ceap'           =>      ['rua:ufa, zona:norte','n°casa: 25','rua:bady, zona:norte','n°casa: 105'],
            'bairro-tiro de guerra' =>      ['rua:212, zona:sul','n°casa:200','rua:poetas, zona:sul','n°casa: 50'],
            'bairro-rock'           =>      ['rua: kallidade, zona:sul','n°casa: 15','rua:rick, zona:sul','n°casa: 10'],
            'bairro-são guilherme'  =>      ['rua: tipo gringa, zona:oeste','n°casa: 500','rua:morty, zona:oeste','n°casa: 75'],
            'bairro-são pedro'      =>      ['rua:mariachi, zona:norte','n°casa: 30','rua:bad, zona:norte','n°casa: 20'],
            'bairro-cala'           =>      ['rua: dia azul, zona:sul','n°casa: 40','rua:icon, zona:sul','n°casa: 90']
           


            ],
            'bahia' => [
            'nome' => 'bh',
            'populacao' => 600000,
            'cidade'   => ['salvador','porto seguro','barreiras'],
            'cidade-s' => ['galaxia(rua:saturno, zona:oeste)','nebulosa(rua:lua, zona:oeste)',],
            'cidade-p' => ['universo(rua:sol, zona:sul)','big bang(rua:estrela, zona:sul)'],
            'cidade-b' => ['boia(rua:venuz, zona:norte)','Alpha Centauri (rua:plutão, zona:norte)'],
            'bairro-galaxia'  =>       ['rua:saturno, zona:oeste','n°casa: 400','rua:via, zona:oeste','n°casa: 30'],
            'bairro-nebulosa' =>       ['rua:lua, zona:oeste','n°casa:500','rua:lactia, zona:sul','n°casa: 110'],
            'bairro-universo' =>       ['rua:sol, zona:sul','n°casa: 155','rua:tum, zona:sul','n°casa: 115'],
            'big bang'        =>       ['rua:estrela, zona:sul','n°casa: 340','rua:vev, zona:sul','n°casa: 145'],
            'bairro-boia'     =>       ['rua:venuz, zona:norte','n°casa: 666','rua:low, zona:norte','n°casa: 777'],
            'Alpha Centauri'  =>       ['rua:plutão, zona:norte','n°casa:800','rua:apha, zona:norte','n°casa: 909']
           
         ],

        'mato grosso' => [
        'nome' => 'ms',
        'populacao' => 300000,
        'cidade' =>['cuiaba','sorriso', 'sinop'],
        'cidade-c' => ['terra(rua:cascalho, zona:sul)','Argiloso(rua:sakura, zona:sul)'],
        'cidade-v' =>['lama(rua:pinheiro, zona:norte )','Argila(rua:Bambu, zona:norte)'],
        'cidade-n' =>['areia(rua:Castanheira, zona:oeste)','Humoso (rua:Pau-Brasil, zona:oeste)'],
        'bairro-Humoso'   =>       ['rua:Pau-Brasil, zona:oeste','n°casa:999','rua:musgo, zona:oeste','n°casa: 333'],
        'bairro-terra'    =>       ['rua:cascalho, zona:sul','n°casa:555','rua:late, zona:sul','n°casa: 111'],
        'bairro-Argiloso' =>       ['rua:sakura, zona:sul','n°casa: 111','rua:granito, zona:sul','n°casa: 222'],
        'big lama'        =>       ['rua:pinheiro, zona:norte','n°casa: 444','rua:vinha, zona:norte','n°casa: 888'],
        'bairro-Argila'   =>       ['rua:Bambu, zona:norte','n°casa: 333','rua:regar, zona:norte','n°casa: 123'],
        'Alpha areia'     =>       ['rua:Castanheira, zona:oeste','n°casa:800','rua:ala, zona:oeste','n°casa: 909']
    ],

        ];

         var_dump($usuario);


    ?>
</center>
</body>
</html>