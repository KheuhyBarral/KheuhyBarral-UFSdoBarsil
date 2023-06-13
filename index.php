<html>

<head>
    <title>PHP Test</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">

<body>
    <header>
        <h2>Lista Sintética de Ufs do Brasil</h2>
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

        ]; ?>


        <table>

            <thead>
                <th>Bandeira</th>
                <th>Unidade Federativa</th>
                <th>Abreviação</th>
                <th>Sede de Governo</th>
                <th>Área</th>
                <th>População</th>
                <th>Densidade Demográfica</th>
                <th>PIB (2015)</th>
                <th>PIB em &#37; Total</th>
                <th>PIB per capta</th>
                <th>IDH</th>
                <th>Alfabetização</th>
                <th>Mortalidade Infantil</th>
                <th>Expectativa de Vida</th>

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