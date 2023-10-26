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
    <title>Bater Ponto</title>

</head>

<body>
    <header>
        <img src="../../../src/image/Cabeçalho sem slogan - Branco.png" alt="logo-include" id="logo-include">
        <h1>Seja Bem Vindo(a) Gustavo! Tenha um ótimo dia de trabalho!</h1>
    </header>

    <div class="caixa">
        <main>

            <div id="div-day-date">
                <div class="day text" id="day">Sexta-Feira</div>,
                <div class="date text" id="date">25/04/2023</div>
            </div>

            <div class="time text" id="time">20:35:45</div>

            <div class="container">
                <div class="box-timer">
                    <a href="registrar_entrada.php"><button id="first-button">Registrar Entrada</button></a>
                    <div id="seccond-box">
                        <p class="register-text registerButton">Registro da Entrada</p>
                        <div class="time text" id="timer-enter"></div>
                    </div>
                </div>

                <div class="box-timer">
                    <a href="registrar_saida.php"><button id="registerButton">Registrar Saída</button></a>
                    <div id="seccond-box">
                        <p class="register-text">Registro de Saída</p>
                        <div class="time text" id="timer"></div>
                    </div>
                </div>
            </div>
        </main>


        <aside id="history">
            <h1>Ultimos registros</h1>
            <div class="table-container">
                <table class="table-item">
                    <tr>
                        <p class="paragraph">Sexta-Feira, 20/23/23</p>
                        <td>Entrada:</td>
                        <td> 20:10:23</td>
                    </tr>

                    <tr>
                        <td>Saída:</td>
                        <td>20:23:45</td>
                    </tr>
                </table>
            </div>

            <div class="table-container">
                <table class="table-item">
                    <tr>
                        <p class="paragraph">Sexta-Feira, 20/23/23</p>
                        <td>Entrada:</td>
                        <td> 20:10:23</td>
                    </tr>

                    <tr>
                        <td>Saída:</td>
                        <td>20:23:45</td>
                    </tr>
                </table>
            </div>

            <div class="table-container">
                <table class="table-item">
                    <tr>
                        <p class="paragraph">Sexta-Feira, 20/23/23</p>
                        <td>Entrada:</td>
                        <td> 20:10:23</td>
                    </tr>

                    <tr>
                        <td>Saída:</td>
                        <td>20:23:45</td>
                    </tr>
                </table>
            </div>

            <div class="table-container">
                <table class="table-item">
                    <tr>
                        <p class="paragraph">Domingo, 20/23/23</p>
                        <td>Entrada:</td>
                        <td> 20:10:23</td>
                    </tr>

                    <tr>
                        <td>Saída:</td>
                        <td>20:23:45</td>
                    </tr>
                </table>
            </div>

            <div class="table-container">
                <table class="table-item">
                    <tr>
                        <p class="paragraph">Sábado, 20/23/23</p>
                        <td>Entrada:</td>
                        <td> 20:10:23</td>
                    </tr>

                    <tr>
                        <td>Saída:</td>
                        <td>20:23:45</td>
                    </tr>
                </table>
            </div>

        </aside>

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