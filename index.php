<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Pesquisa de Qualidade de Atendimento</title>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header text-center bg-primary text-white">
                <h1>Pesquisa de Qualidade de Atendimento</h1>
            </div>
            <div class="card-body">
                <form action="processar_pesquisa.php" method="post">
                    <!-- Dados Pessoais -->
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" id="nome" class="form-control" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF:</label>
                        <input type="text" name="cpf" id="cpf" class="form-control" pattern="\d{11}" required>
                    </div>

                    <!-- Seções de Avaliação -->
                    <div class="form-group">
                        <h2 class="mt-4">Agilidade no Atendimento</h2>
                        <div class="d-flex justify-content-between">
                            <div class="text-center">
                                <input type="radio" name="agilidade" value="Pessimo" id="agilidade-pessimo">
                                <label for="agilidade-pessimo">
                                    <img src="img/pessimo.jpg" alt="Péssimo" class="img-fluid"><br>Péssimo
                                </label>
                            </div>
                            <div class="text-center">
                                <input type="radio" name="agilidade" value="Ruim" id="agilidade-ruim">
                                <label for="agilidade-ruim">
                                    <img src="img/ruim.jpg" alt="Ruim" class="img-fluid"><br>Ruim
                                </label>
                            </div>
                            <div class="text-center">
                                <input type="radio" name="agilidade" value="Regular" id="agilidade-regular">
                                <label for="agilidade-regular">
                                    <img src="img/regular.jpg" alt="Regular" class="img-fluid"><br>Regular
                                </label>
                            </div>
                            <div class="text-center">
                                <input type="radio" name="agilidade" value="Otimo" id="agilidade-otimo">
                                <label for="agilidade-otimo">
                                    <img src="img/otimo.jpg" alt="Ótimo" class="img-fluid"><br>Ótimo
                                </label>
                            </div>
                            <div class="text-center">
                                <input type="radio" name="agilidade" value="Excelente" id="agilidade-excelente">
                                <label for="agilidade-excelente">
                                    <img src="img/excelente.jpg" alt="Excelente" class="img-fluid"><br>Excelente
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <h2 class="mt-4">Cordialidade</h2>
                        <div class="d-flex justify-content-between">
                            <div class="text-center">
                                <input type="radio" name="cordialidade" value="Pessimo" id="cordialidade-pessimo">
                                <label for="cordialidade-pessimo">
                                    <img src="img/pessimo.jpg" alt="Pessimo" class="img-fluid"><br>Péssimo
                                </label>
                            </div>

                            <div class="text-center">
                                <input type="radio" name="cordialidade" value="Ruim" id="cordialidade-ruim">
                                <label for="cordialidade-ruim">
                                    <img src="img/ruim.jpg" alt="Ruim" class="img-fluid"><br>Ruim
                                </label>
                            </div>
                            <div class="text-center">
                                <input type="radio" name="cordialidade" value="Regular" id="cordialidade-regular">
                                <label for="cordialidade-regular">
                                    <img src="img/regular.jpg" alt="Regular" class="img-fluid"><br>Regular
                                </label>
                            </div>
                            <div class="d-flex justify-content-between">
                                <input type="radio" name="cordialidade" value="Otimo" id="cordialidade-otimo">
                                <label for="cordialidade-otimo">
                                    <img src="img/otimo.jpg" alt="Otimo" class="img-fluid"><br>Ótimo
                                </label>
                            </div>
                            <div class="text-center">
                                <input type="radio" name="cordialidade" value="Excelente" id="cordialidade-excelente">
                                <label for="cordialidade-excelente">
                                    <img src="img/excelente.jpg" alt="Excelente" class="img-fluid"><br>Excelente
                                </label>
                            </div>
                        </div>

                        <!-- Qualidade no Serviço -->

                        <div class="form-group">
                            <h2 class="mt-4">Qualidade no Serviço</h2>
                            <div class="d-flex justify-content-between">
                                <div class="form-group">
                                    <input type="radio" name="qualidade" value="Pessimo" id="qualidade-pessimo">
                                    <label for="qualidade-pessimo">
                                        <img src="img/pessimo.jpg" alt="Péssimo" class="img-fluid"><br>Péssimo
                                    </label>
                                </div>

                                <div class="text-center">
                                    <input type="radio" name="qualidade" value="Ruim" id="qualidade-ruim">
                                    <label for="qualidade-ruim">
                                        <img src="img/ruim.jpg" alt="Ruim"><br>Ruim
                                    </label>
                                </div>
                                <div class="text-center">
                                    <input type="radio" name="qualidade" value="Regular" id="qualidade-regular">
                                    <label for="qualidade-regular">
                                        <img src="img/regular.jpg" alt="Regular"><br>Regular
                                    </label>
                                </div>
                                <div class="text-center">
                                    <input type="radio" name="qualidade" value="Otimo" id="qualidade-otimo">
                                    <label for="qualidade-otimo">
                                        <img src="img/otimo.jpg" alt="Otimo"><br>Ótimo
                                    </label>
                                </div>
                                <div class="text-center">
                                    <input type="radio" name="qualidade" value="Excelente" id="qualidade-excelente">
                                    <label for="qualidade-excelente">
                                        <img src="img/excelente.jpg" alt="Excelente"><br>Excelente
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ambiente Físico -->
                    <div class="form-group">
                        <h2 class="mt-4">Ambiente Físico</h2>
                        <div class="d-flex justify-content-between">
                            <div class="text-center">
                                <input type="radio" name="ambiente" value="Pessimo" id="ambiente-pessimo">
                                <label for="ambiente-pessimo">
                                    <img src="img/pessimo.jpg" alt="Pessimo" class="img-fluid"><br>Péssimo
                                </label>
                            </div>
                            <div class="text-center">
                                <input type="radio" name="ambiente" value="Ruim" id="ambiente-ruim">
                                <label for="ambiente-ruim">
                                    <img src="img/ruim.jpg" alt="Ruim" class="img-fluid"><br>Ruim
                                </label>
                            </div>
                            <div class="text-center">
                                <input type="radio" name="ambiente" value="Regular" id="ambiente-regular">
                                <label for="ambiente-regular">
                                    <img src="img/regular.jpg" alt="Regular" class="img-fluid"><br>Regular
                                </label>
                            </div>
                            <div class="text-center">
                                <input type="radio" name="ambiente" value="Otimo" id="ambiente-otimo">
                                <label for="ambiente-otimo">
                                    <img src="img/otimo.jpg" alt="Otimo" class="img-fluid"><br>Ótimo
                                </label>
                            </div>
                            <div class="text-center">
                                <input type="radio" name="ambiente" value="Excelente" id="ambiente-excelente">
                                <label for="ambiente-excelente">
                                    <img src="img/excelente.jpg" alt="Excelente" class="img-fluid"><br>Excelente
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Campo de Opinião -->
                    <div class="form-group">
                        <label for="opiniao">Deixe sua opinião:</label>
                        <textarea name="opiniao" id="opiniao" rows="4" class="form-control"></textarea>
                    </div>

                    <!-- Botão de Envio -->
                    <button type="submit" class="btn btn-primary btn-block mt-4">Terminei, Enviar Pesquisa</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHrdOUmfkA7jUj0dxBhfYY7v1wZpyz9aCtw0jOjIsy7oKkZ0n9JGvlfs"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy2L6doN4P6xriYNKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
</body>

</html>