<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./styles.css">
    <title>Buscar Funionário</title>
</head>

<body>
    <header>
        <img src="../../../src/image/Cabeçalho sem slogan - Branco.png" alt="logo-include" id="logo-include">
        <h1>Empresa ufc.ltda CNPJ:22451998.41</h1>
    </header>

    <div class="container">
        <main>

            <div id="div-day-date">
                <div class="day text" id="day">Sexta-Feira</div>,
                <div class="date text" id="date">25/04/2023</div>
            </div>

            <div class="time text" id="time">20:35:45</div>

            <div class="div-main">
                <form action="filtros.php" method="post">
                    <h1>Consultar Funcionário</h1>
                    <label for="name">Nome:</label>
                    <input class="input" type="text" name="nome" placeholder="Nome do funcionário" value="<?php echo $name ?>">
                    <label for="data">Datas:</label>
                    <input class="input" type="date" name="data1" min="2023-01-01" placeholder="De:" value="<?php echo $data_busca1?>">
                    <input class="input" type="date" name="data2" max="2100-12-31" placeholder="Até:" value="<?php echo $data_busca2?>">
                    <input type="submit" value="Filtrar">
                </form>
            </div>
        </main>

        <footer>
            <h1 class="title-footer">Artigo 74 da CLT</h1>
            <h2 class="text-footer">Segundo o texto, todo estabelecimento com mais de 20 colaboradores tem a obrigação
                de registrar e
                acompanhar o ponto dos trabalhadores. Além disso, esse registro pode ser feito de três formas
                diferentes: sistema manual, mecânico ou eletrônico.</h2>
        </footer>

        <div class="after-footer"></div>
    </div>

    <script src="./script.js"></script>
</body>

</html>