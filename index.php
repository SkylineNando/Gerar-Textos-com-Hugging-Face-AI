<?php
// Seu token da Hugging Face
$apiKey = "your key";

// Dados do modelo e do texto
$model = "gpt2"; // Nome correto do modelo
$prompt = "Titulo: sobre Sustentabilidade no século XXI. Resumo: Os desafios da sustentabilidade...";

// Configuração do payload
$data = [
    "inputs" => $prompt, // Entrada de texto
    "parameters" => [
        "max_length" => 1024, // Limite de caracteres no texto gerado
        "temperature" => 0.7 // Criatividade do texto
    ]
];

// Endpoint do modelo
$url = "https://api-inference.huggingface.co/models/$model";

// Inicializa o cURL
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer $apiKey",
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

// Executa a requisição
$response = curl_exec($ch);
curl_close($ch);

// Decodifica e exibe o texto gerado
$result = json_decode($response, true);

if (isset($result[0]['generated_text'])) {
    echo "<h1>Texto Gerado:</h1>";
    echo "<p>" . nl2br(trim($result[0]['generated_text'])) . "</p>";
} else {
    echo "<h1>Erro:</h1>";
    echo "<p>" . json_encode($result) . "</p>";
}
?>
