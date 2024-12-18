<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Qualidade de Atendimento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #283645;
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            color: #283645;
            margin-bottom: 10px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .rating-options {
            display: flex;
            justify-content: space-between;
        }

        .rating-options label {
            text-align: center;
            cursor: pointer;
        }

        .rating-options input {
            display: none;
        }

        .rating-options img {
            width: 50px;
            height: 50px;
        }

        .rating-options input:checked+label img {
            border: 2px solid #3490dc;
            border-radius: 0%;
        }

        button {
            display: block;
            width: 100%;
            background: #3490dc;
            color: #fff;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #a50000;
        }
    </style>
</head>

<body>
<div class="container">
        <h1>Pesquisa de Qualidade de Atendimento</h1>
        <form action="processar_pesquisa.php" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" id="cpf" pattern="\d{11}" required>
            </div>

            <!-- Agilidade no Atendimento -->
            <h2>Agilidade no Atendimento</h2>
            <div class="form-group rating-options">
                <div>
                    <input type="radio" name="agilidade" value="Péssimo" id="agilidade-pessimo">
                    <label for="agilidade-pessimo">
                        <img src="img/pessimo.jpg" alt="Péssimo"><br>Péssimo
                    </label>
                </div>
                <div>
                    <input type="radio" name="agilidade" value="Ruim" id="agilidade-ruim">
                    <label for="agilidade-ruim">
                        <img src="img/ruim.jpg" alt="Ruim"><br>Ruim
                    </label>
                </div>
                <div>
                    <input type="radio" name="agilidade" value="Regular" id="agilidade-regular">
                    <label for="agilidade-regular">
                        <img src="img/regular.jpg" alt="Regular"><br>Regular
                    </label>
                </div>
                <div>
                    <input type="radio" name="agilidade" value="Otimo" id="agilidade-otima">
                    <label for="agilidade-otima">
                        <img src="img/otimo.jpg" alt="Otimo"><br>Ótimo
                    </label>
                </div>
                <div>
                    <input type="radio" name="agilidade" value="Excelente" id="agilidade-excelente">
                    <label for="agilidade-excelente">
                        <img src="img/excelente.jpg" alt="Excelente"><br>Excelente
                    </label>
                </div>
            </div>

            <!-- Cordialidade -->
            <h2>Cordialidade</h2>
            <div class="form-group rating-options">
                <div>
                    <input type="radio" name="cordialidade" value="Péssimo" id="cordialidade-pessimo">
                    <label for="cordialidade-pessimo">
                        <img src="img/pessimo.jpg" alt="Péssimo"><br>Péssimo
                    </label>
                </div>
                <div>
                    <input type="radio" name="cordialidade" value="Ruim" id="cordialidade-ruim">
                    <label for="cordialidade-ruim">
                        <img src="img/ruim.jpg" alt="Ruim"><br>Ruim
                    </label>
                </div>
                <div>
                    <input type="radio" name="cordialidade" value="Regular" id="cordialidade-regular">
                    <label for="cordialidade-regular">
                        <img src="img/regular.jpg" alt="Regular"><br>Regular
                    </label>
                </div>
                <div>
                    <input type="radio" name="cordialidade" value="Otimo" id="cordialidade-otimo">
                    <label for="cordialidade-otimo">
                        <img src="img/otimo.jpg" alt="Otimo"><br>Ótimo
                    </label>
                </div>
                <div>
                    <input type="radio" name="cordialidade" value="Excelente" id="cordialidade-excelente">
                    <label for="cordialidade-excelente">
                        <img src="img/excelente.jpg" alt="Excelente"><br>Excelente
                    </label>
                </div>
            </div>

            <!-- Qualidade no Serviço -->
            <h2>Qualidade no Serviço</h2>
            <div class="form-group rating-options">
                <div>
                    <input type="radio" name="qualidade" value="Péssimo" id="qualidade-pessimo">
                    <label for="qualidade-pessimo">
                        <img src="img/pessimo.jpg" alt="Péssimo"><br>Péssimo
                    </label>
                </div>
                <div>
                    <input type="radio" name="qualidade" value="Ruim" id="qualidade-ruim">
                    <label for="qualidade-ruim">
                        <img src="img/ruim.jpg" alt="Ruim"><br>Ruim
                    </label>
                </div>
                <div>
                    <input type="radio" name="qualidade" value="Regular" id="qualidade-regular">
                    <label for="qualidade-regular">
                        <img src="img/regular.jpg" alt="Regular"><br>Regular
                    </label>
                </div>
                <div>
                    <input type="radio" name="qualidade" value="Otimo" id="qualidade-otimo">
                    <label for="qualidade-otimo">
                        <img src="img/otimo.jpg" alt="Otimo"><br>Ótimo
                    </label>
                </div>
                <div>
                    <input type="radio" name="qualidade" value="Excelente" id="qualidade-excelente">
                    <label for="qualidade-excelente">
                        <img src="img/excelente.jpg" alt="Excelente"><br>Excelente
                    </label>
                </div>
            </div>

            <!-- Ambiente Físico -->
            <h2>Ambiente Físico</h2>
            <div class="form-group rating-options">
                <div>
                    <input type="radio" name="ambiente" value="Péssimo" id="ambiente-pessimo">
                    <label for="ambiente-pessimo">
                        <img src="img/pessimo.jpg" alt="Péssimo"><br>Péssimo
                    </label>
                </div>
                <div>
                    <input type="radio" name="ambiente" value="Ruim" id="ambiente-ruim">
                    <label for="ambiente-ruim">
                        <img src="img/ruim.jpg" alt="Ruim"><br>Ruim
                    </label>
                </div>
                <div>
                    <input type="radio" name="ambiente" value="Regular" id="ambiente-regular">
                    <label for="ambiente-regular">
                        <img src="img/regular.jpg" alt="Regular"><br>Regular
                    </label>
                </div>
                <div>
                    <input type="radio" name="ambiente" value="Otimo" id="ambiente-otimo">
                    <label for="ambiente-otimo">
                        <img src="img/otimo.jpg" alt="Otimo"><br>Ótimo
                    </label>
                </div>
                <div>
                    <input type="radio" name="ambiente" value="Excelente" id="ambiente-excelente">
                    <label for="ambiente-excelente">
                        <img src="img/excelente.jpg" alt="Excelente"><br>Excelente
                    </label>
                </div>
            </div>

            <div class="form-group">
                <div>
                    <label for="opiniao">Deixe sua opinião:</label>
                </div>
                <textarea name="opiniao" id="opiniao" rows="7"></textarea>
            </div>
            <button type="submit">Terminei, Enviar Pesquisa</button>
        </form>
    </div>
</body>

</html>