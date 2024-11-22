# Documentação: Como Utilizar o Código para Gerar Textos com Hugging Face

Esta documentação explica como usar o código PHP disponibilizado para gerar textos utilizando o modelo GPT-2 da Hugging Face.

## Requisitos
Antes de utilizar o código, certifique-se de que o ambiente atenda aos seguintes requisitos:

1. **PHP 7.4 ou superior**: O código utiliza cURL e funções modernas de PHP.
2. **Extensão cURL habilitada**: Verifique se o cURL está habilitado no servidor PHP.
3. **Conta na Hugging Face**: Crie uma conta gratuita em [huggingface.co](https://huggingface.co/).
4. **Token de Acesso**: Gere um token na página de [Configurações de Tokens](https://huggingface.co/settings/tokens).

## Configuração
### 1. Obtenha seu Token
Acesse [Hugging Face Tokens](https://huggingface.co/settings/tokens) e clique em **"New Token"** para gerar um token de acesso. Este token será usado para autenticar as requisições à API.

### 2. Edite o Código PHP
Substitua a variável `$apiKey` pelo seu token gerado:

```php
$apiKey = "hf_seu_token_aqui";
```

### 3. Configure o Modelo e o Prompt
- **Modelo**: Certifique-se de que o modelo especificado em `$model` é válido. Por padrão, o código utiliza `gpt2`.
- **Prompt**: Ajuste a variável `$prompt` para refletir o tema desejado:

```php
$prompt = "Titulo: sobre Sustentabilidade no século XXI. Resumo: Os desafios da sustentabilidade...";
```

### 4. Parâmetros de Configuração
Os parâmetros podem ser ajustados para personalizar a geração do texto:
- **`max_length`**: Define o tamanho máximo do texto gerado (em tokens). Padrão: `1024`.
- **`temperature`**: Controla a criatividade do texto. Valores entre `0.1` (mais conservador) e `1.0` (mais criativo).

Exemplo:
```php
"parameters" => [
    "max_length" => 1024,
    "temperature" => 0.7
]
```

### 5. Executando o Código
Salve o código como um arquivo PHP, por exemplo, `gerar_texto.php`, e execute-o em um servidor PHP.

## Resultados
O código gerará um texto com base no prompt fornecido e exibirá o resultado na página:

- **Texto Gerado**: O texto gerado será exibido dentro de uma estrutura HTML.
- **Erros**: Caso haja um erro, ele será exibido em formato JSON para facilitar a depuração.

### Exemplo de Saída
#### Texto Gerado
```html
<h1>Texto Gerado:</h1>
<p>O texto gerado será exibido aqui...</p>
```

#### Erro
```html
<h1>Erro:</h1>
<p>{"error": "Authorization header is missing."}</p>
```

## Erros Comuns
### 1. **Token Inválido ou Ausente**
Mensagem: `"Authorization header is correct, but the token seems invalid."`
- Verifique se o token foi copiado corretamente.

### 2. **Modelo Não Encontrado**
Mensagem: `"Model gpt2 does not exist."`
- Confirme que o modelo especificado é válido e acessível.

### 3. **Limite de Tokens Excedido**
Mensagem: `"Request exceeds maximum allowed tokens."`
- Reduza o valor de `max_length`.

## Personalizações Adicionais
- **Alterar o Modelo**: Substitua `gpt2` por outros modelos, como `EleutherAI/gpt-neo-2.7B` ou outros disponíveis na [Hugging Face Models](https://huggingface.co/models).
- **Aprimorar o Prompt**: Adicione instruções específicas no prompt para obter respostas mais direcionadas.

## Contribuição
Contribuições para melhorias no código são bem-vindas! Crie um pull request no repositório do GitHub [skylinenando](https://github.com/skylinenando).

## Licença
Este código está licenciado sob a [MIT License](https://opensource.org/licenses/MIT).

