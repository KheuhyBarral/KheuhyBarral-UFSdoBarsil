<html>

<head>
    <title>PHP Test</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">

<body>
    <header>
        <h2>Lista Sintética de Ufs do Brasil</h2>
        <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    </header>
    <main>
        <?php
        $listasintetica = [
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Bandeira_do_Acre.svg" alt="Bandeira do Acre" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Acre',
                'abreviacao' => 'AC',
                'sede_de_governo' => 'Rio Branco',
                'area' => 164122.2,
                'populacao' => 795145,
                'densidade' => 4.30,
                'pib_2015' => 13622000,
                '%_total' => 0.2,
                'pib_per_capita' => 16953.46,
                'idh' => 0.663,
                'alfabetizacao' => '86,9%',
                'mortalidade_infantil' => '17%',
                'expectativa_de_vida' => '73,9 anos',

            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/8/88/Bandeira_de_Alagoas.svg" alt="Bandeira de Alagoas" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Alagoas',
                'abreviacao' => 'AL',
                'sede_de_governo' => 'Maceió',
                'area' => 27778.506,
                'populacao' => 3351543,
                'densidade' => 120.4,
                'pib_2015' => 52459770,
                '%_total' => 0.5,
                'pib_per_capita' => 15460.09,
                'idh' => 0.631,
                'alfabetizacao' => '82,8%',
                'mortalidade_infantil' => '15,8%',
                'expectativa_de_vida' => '73,5 anos',
            ),

            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/0/0c/Bandeira_do_Amap%C3%A1.svg" alt="Bandeira do Amapá" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Amapá',
                'abreviacao' => 'AP',
                'sede_de_governo' => 'Macapá',
                'area' => '142 814,6',
                'populacao' => '756 500',
                'densidade' => '4,16',
                'pib_2015' => '13 861 000',
                '%_total' => '0,2',
                'pib_per_capita' => '18 079,54',
                'idh' => '0,708',
                'alfabetizacao' => '95%',
                'mortalidade_infantil' => '23,2‰',
                'expectativa_de_vida' => '73,9 anos',
            ),
            array(
                'bandeira' =>
                '<img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/Bandeira_do_Amazonas.svg" alt="Bandeira do Amapá" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Amazonas',
                'abreviacao' => 'AM',
                'sede_de_governo' => 'Manaus',
                'area' => '1 570 745,7',
                'populacao' => '3 893 763',
                'densidade' => '2,05',
                'pib_2015' => '86 560 000',
                '%_total' => '1,4',
                'pib_per_capita' => '21 978,95',
                'idh' => '0,674',
                'alfabetizacao' => '93,1%',
                'mortalidade_infantil' => '18,2‰',
                'expectativa_de_vida' => '71,9 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/2/28/Bandeira_da_Bahia.svg" alt="Bandeira da Bahia" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Bahia',
                'abreviacao' => 'BA',
                'sede_de_governo' => 'Salvador',
                'area' => '564 692,7',
                'populacao' => '15 150 143',
                'densidade' => '24,46',
                'pib_2015' => '245 025 000',
                '%_total' => '4,1',
                'pib_per_capita' => '16 115,89',
                'idh' => '0,660',
                'alfabetizacao' => '87%',
                'mortalidade_infantil' => '17,3‰',
                'expectativa_de_vida' => '73,5 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/2/2e/Bandeira_do_Cear%C3%A1.svg" alt="Bandeira do Ceará" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Ceará',
                'abreviacao' => 'CE',
                'sede_de_governo' => 'Fortaleza',
                'area' => '148 825,6',
                'populacao' => '8 867 448',
                'densidade' => '54,40',
                'pib_2015' => '130 621 000',
                '%_total' => '2,2',
                'pib_per_capita' => '14 669,14',
                'idh' => '0,682',
                'alfabetizacao' => '84,8%',
                'mortalidade_infantil' => '14,4‰',
                'expectativa_de_vida' => '73,8 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Bandeira_do_Distrito_Federal_%28Brasil%29.svg" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Distrito Federal',
                'abreviacao' => 'DF',
                'sede_de_governo' => 'Brasília',
                'area' => '5 822,1',
                'populacao' => '2 867 869',
                'densidade' => '400,73',
                'pib_2015' => '215 613 000',
                '%_total' => '3,6',
                'pib_per_capita' => '73 971,05',
                'idh' => '0,824',
                'alfabetizacao' => '97,4%',
                'mortalidade_infantil' => '10,5‰',
                'expectativa_de_vida' => '78,1 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/4/43/Bandeira_do_Esp%C3%ADrito_Santo.svg" alt="Bandeira do Espírito Santo" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Espírito Santo',
                'abreviacao' => 'ES',
                'sede_de_governo' => 'Vitória',
                'area' => '46 077,5',
                'populacao' => '3 894 899',
                'densidade' => '73,97',
                'pib_2015' => '120 363 000',
                '%_total' => '2',
                'pib_per_capita' => '30 627,45',
                'idh' => '0,740',
                'alfabetizacao' => '93,8%',
                'mortalidade_infantil' => '8,8‰',
                'expectativa_de_vida' => '78,2 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/b/be/Flag_of_Goi%C3%A1s.svg" alt="Flag of Goiás" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Goiás',
                'abreviacao' => 'GO',
                'sede_de_governo' => 'Goiânia',
                'area' => '340 086,7',
                'populacao' => '6 551 322',
                'densidade' => '16,52',
                'pib_2015' => '173 632 000',
                '%_total' => '2,9',
                'pib_per_capita' => '26 265,32',
                'idh' => '0,735',
                'alfabetizacao' => '93,5%',
                'mortalidade_infantil' => '14,9‰',
                'expectativa_de_vida' => '74,2 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/4/45/Bandeira_do_Maranh%C3%A3o.svg" alt="Bandeira do Maranhão" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Maranhão',
                'abreviacao' => 'MA',
                'sede_de_governo' => 'São Luís',
                'area' => '331 983,3',
                'populacao' => '6 861 924',
                'densidade' => '18,38',
                'pib_2015' => '78 475 000',
                '%_total' => '1,3',
                'pib_per_capita' => '11 366,23',
                'idh' => '0,639',
                'alfabetizacao' => '83,3%',
                'mortalidade_infantil' => '21,3‰',
                'expectativa_de_vida' => '70,6 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Bandeira_de_Mato_Grosso.svg/1024px-Bandeira_de_Mato_Grosso.svg.png"alt="Bandeira de Mato Grosso" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Mato Grosso',
                'abreviacao' => 'MT',
                'sede_de_governo' => 'Cuiabá',
                'area' => '903 357,9',
                'populacao' => '3 236 578',
                'densidade' => '3,10',
                'pib_2015' => '107 418 000',
                '%_total' => '1,8',
                'pib_per_capita' => '32 894,96',
                'idh' => '0,725',
                'alfabetizacao' => '93,5%',
                'mortalidade_infantil' => '16,9‰',
                'expectativa_de_vida' => '74,9 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/6/64/Bandeira_de_Mato_Grosso_do_Sul.svg" alt="Bandeira do Mato Grosso do Sul" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Mato Grosso do Sul',
                'abreviacao' => 'MS',
                'sede_de_governo' => 'Campo Grande',
                'area' => '357 125,0	',
                'populacao' => '2 630 098',
                'densidade' => '6,34',
                'pib_2015' => '83 082 000',
                '%_total' => '1,4',
                'pib_per_capita' => '31 337,22',
                'idh' => '0,729	',
                'alfabetizacao' => '93,7%',
                'mortalidade_infantil' => '14,0‰',
                'expectativa_de_vida' => '75,5 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/f/f4/Bandeira_de_Minas_Gerais.svg" alt="Bandeira de Minas Gerais" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Minas Gerais',
                'abreviacao' => 'MG',
                'sede_de_governo' => 'Belo Horizonte',
                'area' => '586 528,3',
                'populacao' => '20 777 672',
                'densidade' => '32,79	',
                'pib_2015' => '519 326 000',
                '%_total' => '8,7',
                'pib_per_capita' => '24 884,94',
                'idh' => '0,731',
                'alfabetizacao' => '93,8%',
                'mortalidade_infantil' => '10,9‰',
                'expectativa_de_vida' => '72,2 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/0/02/Bandeira_do_Par%C3%A1.svg" alt="Bandeira do Pará" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Pará',
                'abreviacao' => 'PA',
                'sede_de_governo' => 'Belém',
                'area' => '1 247 689,5',
                'populacao' => '8 101 180',
                'densidade' => '5,8',
                'pib_2015' => '130 883 000',
                '%_total' => '2,2',
                'pib_per_capita' => '16 009,98',
                'idh' => '0,646',
                'alfabetizacao' => '83,7%',
                'mortalidade_infantil' => '16,1‰',
                'expectativa_de_vida' => '73,2 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Bandeira_da_Para%C3%ADba.svg" alt="Bandeira da Paraíba" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Paraíba',
                'abreviacao' => 'PB',
                'sede_de_governo' => 'João Pessoa',
                'area' => '56 439,8	',
                'populacao' => '3 950 359',
                'densidade' => '63,71',
                'pib_2015' => '56 140 000',
                '%_total' => '0,9',
                'pib_per_capita' => '14 133,32',
                'idh' => '0,658',
                'alfabetizacao' => '83,7%',
                'mortalidade_infantil' => '14,1‰',
                'expectativa_de_vida' => '73,2 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/9/93/Bandeira_do_Paran%C3%A1.svg" alt="Bandeira do Paraná" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Paraná',
                'abreviacao' => 'PR',
                'sede_de_governo' => 'Curitiba',
                'area' => '199 314,9',
                'populacao' => '11 112 062',
                'densidade' => '51,48',
                'pib_2015' => '376 960 000',
                '%_total' => '6,3',
                'pib_per_capita' => '33 768,62',
                'idh' => '0,749',
                'alfabetizacao' => '95,5%',
                'mortalidade_infantil' => '9,3‰',
                'expectativa_de_vida' => '77,1 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/5/59/Bandeira_de_Pernambuco.svg" alt="Bandeira de Pernambuco" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Pernambuco',
                'abreviacao' => 'PE',
                'sede_de_governo' => 'Recife',
                'area' => '98 311,6	',
                'populacao' => '9 297 8611',
                'densidade' => '85,58',
                'pib_2015' => '156 955 000	',
                '%_total' => '2,6',
                'pib_per_capita' => '16 795,34',
                'idh' => '0,673	',
                'alfabetizacao' => '87,2%',
                'mortalidade_infantil' => '12,7‰',
                'expectativa_de_vida' => '73,9 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/3/33/Bandeira_do_Piau%C3%AD.svg" alt="Bandeira do Piauí" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Piauí',
                'abreviacao' => 'PI',
                'sede_de_governo' => 'Teresina',
                'area' => '251 529,2',
                'populacao' => '3 198 185',
                'densidade' => '11,95',
                'pib_2015' => '39 148 000',
                '%_total' => '0,7	',
                'pib_per_capita' =>'12 218,51	',
                'idh' => '0,646',
                'alfabetizacao' => '82,8%	',
                'mortalidade_infantil' => '19,1‰',
                'expectativa_de_vida' => '71,1 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/7/73/Bandeira_do_estado_do_Rio_de_Janeiro.svg" alt="Bandeira do Rio de Janeiro" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Rio de Janeiro',
                'abreviacao' => 'RJ',
                'sede_de_governo' => 'Rio de Janeiro',
                'area' => '43 696,1',
                'populacao' => '16 497 395',
                'densidade' => '352,05',
                'pib_2015' => '659 137 000	',
                '%_total' => '11',
                'pib_per_capita' => '39 826,95',
                'idh' => '0,761',
                'alfabetizacao' => '93,3%',
                'mortalidade_infantil' => '11,5‰',
                'expectativa_de_vida' => '76,2 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/3/30/Bandeira_do_Rio_Grande_do_Norte.svg" alt="Bandeira do Rio Grande do Norte" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Rio Grande do Norte',
                'abreviacao' => 'RN',
                'sede_de_governo' => 'Natal',
                'area' => '52 796,8	',
                'populacao' => '3 419 550',
                'densidade' => '56,88',
                'pib_2015' => '57 250 000',
                '%_total' => '1,0',
                'pib_per_capita' => '16 631,86	',
                'idh' => '0,684',
                'alfabetizacao' => '85,3%%',
                'mortalidade_infantil' => '14,7‰',
                'expectativa_de_vida' => '75,7 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/6/63/Bandeira_do_Rio_Grande_do_Sul.svg" alt="Bandeira do Rio Grande do Sul" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Rio Grande do Sul',
                'abreviacao' => 'RS',
                'sede_de_governo' => 'Porto Alegre',
                'area' => '281 748,5',
                'populacao' => '11 228 091',
                'densidade' => '38,49',
                'pib_2015' => '381 985 000',
                '%_total' => '6,4',
                'pib_per_capita' => '33 960,36',
                'idh' => '0,746',
                'alfabetizacao' => '96,8%',
                'mortalidade_infantil' => '8,6',
                'expectativa_de_vida' => '77,8 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Bandeira_de_Rond%C3%B4nia.svg" alt="Bandeira de Rondônia" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Rondônia',
                'abreviacao' => 'RO',
                'sede_de_governo' => 'Porto Velho',
                'area' => '237 576,2',
                'populacao' => '1 755 015',
                'densidade' => '6,46',
                'pib_2015' => '36 563 000	',
                '%_total' => '0,6',
                'pib_per_capita' => '20 677,95',
                'idh' => '0,690',
                'alfabetizacao' => '93,3%',
                'mortalidade_infantil' => '20%',
                'expectativa_de_vida' => '71,3anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/9/98/Bandeira_de_Roraima.svg" alt="Bandeira de Roraima" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Roraima',
                'abreviacao' => 'RR',
                'sede_de_governo' => 'Boa Vista',
                'area' => '224 299,0',
                'populacao' => '500 826',
                'densidade' => '1,74',
                'pib_2015' => '10 354 000',
                '%_total' => '0,2',
                'pib_per_capita' => '	20 476,71	',
                'idh' => '0,707',
                'alfabetizacao' => '93,4%',
                'mortalidade_infantil' => '17,2‰',
                'expectativa_de_vida' => '71,5 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/1/1a/Bandeira_de_Santa_Catarina.svg" alt="Bandeira de Santa Catarina" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Santa Catarina',
                'abreviacao' => 'SC',
                'sede_de_governo' => 'Florianópolis',
                'area' => '95 346,2',
                'populacao' => '6 734 568',
                'densidade' => '61,53',
                'pib_2015' => '249 073 000',
                '%_total' => '4,2',
                'pib_per_capita' => '336 525,28',
                'idh' => '0,774',
                'alfabetizacao' => '97,2%%',
                'mortalidade_infantil' => '9,2‰',
                'expectativa_de_vida' => '79,1 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/2/2b/Bandeira_do_estado_de_S%C3%A3o_Paulo.svg" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'São Paulo',
                'abreviacao' => 'SP',
                'sede_de_governo' => 'São Paulo',
                'area' => '248 209,4',
                'populacao' => '1 939 890 000',
                'densidade' => '162,93',
                'pib_2015' => '2 219 735 000',
                '%_total' => '32,4',
                'pib_per_capita' => '43 694,68',
                'idh' => '0,783',
                'alfabetizacao' => '97,2%%',
                'mortalidade_infantil' => '9,9‰',
                'expectativa_de_vida' => '78,1anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/b/be/Bandeira_de_Sergipe.svg" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Sergipe',
                'abreviacao' => 'SE',
                'sede_de_governo' => 'Aracaju',
                'area' => '21 910,3	',
                'populacao' => '2 227 294',
                'densidade' => '89,81',
                'pib_2015' => '38 554 000',
                '%_total' => '0,6',
                'pib_per_capita' => '17 189,28',
                'idh' => '0,665',
                'alfabetizacao' => '85,3%%',
                'mortalidade_infantil' => '16,2‰',
                'expectativa_de_vida' => '72,7 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/f/ff/Bandeira_do_Tocantins.svg" alt="Bandeira de Tocantins" style="width: 100px; height: auto;">',
                'unidade_federativa' => 'Tocantins',
                'abreviacao' => 'TO',
                'sede_de_governo' => 'Palmas',
                'area' => '277 620,9',
                'populacao' => '1 502 759',
                'densidade' => '4,70',
                'pib_2015' => '28 930 000',
                '%_total' => '0,5',
                'pib_per_capita' => '19 094,16',
                'idh' => '0,699',
                'alfabetizacao' => '89,6%',
                'mortalidade_infantil' => '15,68‰',
                'expectativa_de_vida' => '73,4 anos',
            ),
        ];?>


<table>
            <thead>
                <tr>
                    <th>Bandeira</th>
                    <th>Unidade Federativa</th>
                    <th>Abreviação</th>
                    <th>Sede de Governo</th>
                    <th>Área</th>
                    <th>População</th>
                    <th>Densidade Demográfica</th>
                    <th>PIB (2015)</th>
                    <th>PIB em % Total</th>
                    <th>PIB per Capita</th>
                    <th>IDH</th>
                    <th>Alfabetização</th>
                    <th>Mortalidade Infantil</th>
                    <th>Expectativa de Vida</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listasintetica as $valor) {
                ?>
                    <tr>
                        <td><?php echo $valor['bandeira']; ?></td>
                        <td><?php echo $valor['unidade_federativa']; ?></td>
                        <td><?php echo $valor['abreviacao']; ?></td>
                        <td><?php echo $valor['sede_de_governo']; ?></td>
                        <td><?php echo $valor['area']; ?></td>
                        <td><?php echo $valor['populacao']; ?></td>
                        <td><?php echo $valor['densidade']; ?></td>
                        <td><?php echo $valor['pib_2015']; ?></td>
                        <td><?php echo $valor['%_total']; ?></td>
                        <td><?php echo $valor['pib_per_capita']; ?></td>
                        <td><?php echo $valor['idh']; ?></td>
                        <td><?php echo $valor['alfabetizacao']; ?></td>
                        <td><?php echo $valor['mortalidade_infantil']; ?></td>
                        <td><?php echo $valor['expectativa_de_vida']; ?></td>

                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>

    </main>

</body>

</html>