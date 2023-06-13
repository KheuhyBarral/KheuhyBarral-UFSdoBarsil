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
        )

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