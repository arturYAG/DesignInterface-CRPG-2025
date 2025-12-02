<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // URL do Apps Script
    $url = "https://script.google.com/macros/s/AKfycbzUryih7Y5ywVUldVg9MG2u5_bORs9Ec-J6Jz4FLXjxEQsR1BIPxS_9R4YZmpg3kyBmmg/exec";

    // Dados do formulário
    $data = [
        "nome" => $_POST["nome"] ?? "",
        "email" => $_POST["email"] ?? "",
        "mensagem" => $_POST["mensagem"] ?? ""
        // Adicione outros campos conforme necessário
    ];

    // Inicializa cURL
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    echo "<p>enviaremos seu pato!</p>";
    echo "<pre>" . htmlspecialchars($response) . "</pre>";
    } else {
        echo "<p>Nenhum pato vai ser enviado, nao recebos suas info.</p>";
    }
?>
