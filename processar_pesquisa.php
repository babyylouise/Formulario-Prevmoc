<?php

$host = 'localhost'; 
$dbname = 'pesquisa'; 
$user = 'root'; 
$password = ''; 

try {
    // Conexão com o banco de dados (charset utf8mb4 para suportar caracteres especiais)
    $pdo = new PDO("mysql:host=$host;charset=utf8mb4", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Criar o banco de dados caso não exista
    $pdo->exec("CREATE DATABASE IF NOT EXISTS $dbname");
    
    // Conectar ao banco de dados específico
    $pdo->exec("USE $dbname");

    // Criar a tabela caso não exista
    $createTableSQL = "
    CREATE TABLE IF NOT EXISTS respostas (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        cpf VARCHAR(15) NOT NULL,
        agilidade VARCHAR(10) NOT NULL,
        cordialidade VARCHAR(10) NOT NULL,
        qualidade VARCHAR(10) NOT NULL,
        ambiente VARCHAR(10) NOT NULL,
        opiniao TEXT
    )";
    $pdo->exec($createTableSQL);

    // Recuperando os dados do formulário
    $nome = isset($_POST['nome']) ? trim($_POST['nome']) : null;
    $cpf = isset($_POST['cpf']) ? trim($_POST['cpf']) : null;
    $agilidade = isset($_POST['agilidade']) ? $_POST['agilidade'] : null;
    $cordialidade = isset($_POST['cordialidade']) ? $_POST['cordialidade'] : null;
    $qualidade = isset($_POST['qualidade']) ? $_POST['qualidade'] : null;
    $ambiente = isset($_POST['ambiente']) ? $_POST['ambiente'] : null;
    $opiniao = isset($_POST['opiniao']) ? trim($_POST['opiniao']) : null;


    // Verificar se os campos obrigatórios foram preenchidos
    if (!$nome || !$cpf || !$agilidade || !$cordialidade || !$qualidade || !$ambiente) {
        echo "Por favor, preencha todos os campos obrigatórios.";
        exit;
    }

    // Inserir os dados no banco de dados
    $sql = "INSERT INTO respostas (nome, cpf, agilidade, cordialidade, qualidade, ambiente, opiniao) 
            VALUES (:nome, :cpf, :agilidade, :cordialidade, :qualidade, :ambiente, :opiniao)";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':agilidade', $agilidade);
    $stmt->bindParam(':cordialidade', $cordialidade);
    $stmt->bindParam(':qualidade', $qualidade);
    $stmt->bindParam(':ambiente', $ambiente);
    $stmt->bindParam(':opiniao', $opiniao);

    $stmt->execute();

    // Mensagem de sucesso
    echo "Obrigado por participar da pesquisa!";
} catch (PDOException $e) {
    // Mensagem de erro
    echo "Erro ao processar a pesquisa: " . $e->getMessage();
}
?>
