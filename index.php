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
                'bandeira' => '.',
                'unidade_federativa' => 'Alagoas',
                'abreviacao' => 'AL',
                'sede_de_governo' => 'Maceió',
                'area' => 3327551,
                'populacao' => 3327551,
                'densidade' => 108.61,
                'pib_2015' => 46364000,
                '%_total' => 0.8,
                'pib_per_capita' => 13877.53,
                'idh' => 0.631,
                'alfabetizacao' => '80,6%',
                'mortalidade_infantil' => '19%',
                'expectativa_de_vida' => '71,6 anos',

            ),
            array(
                'bandeira' => '.' ,
                'unidade_federativa' => 'Amapá',
                'abreviacao' => 'AP',
                'sede_de_governo' => 'Macapá',
                'area' => 142814.6,
                'populacao' => 756500,
                'densidade' => 4.16,
                'pib_2015' => 13861000,
                '%_total' => 0.2,
                'pib_per_capita' => 18079.54,
                'idh' => 0.708,
                'alfabetizacao' => '95%',
                'mortalidade_infantil' => '23,2%',
                'expectativa_de_vida' => '73,9 anos',
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