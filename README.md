# Boleto Bradesco Shop Fácil 

Pacote  responsável por gerar boletos carteira 26 via API  com Sho Fácil/Bradesco

## 🚀 Começando

Essas instruções permitirão que você obtenha uma cópia do projeto em operação na sua máquina local para fins de desenvolvimento e teste.


### 📋 Pré-requisitos

- PHP ˆ7.2
- Laravel ˆ6
- Composer

### 🔧 Instalação

Use o gerenciador de pacotes COMPOSER para i ncluir as dependencias  ao seu projeto.

Comando a execultar:

```
composer require FlyCorp/bradesco 
```

Em seguida :

```
composer install FlyCorp/bradesco
```

## ⚙️ Botando pra rodar

O arquivo deve estar dentro do diretio app do laravel vide exemplo abaixo 

```
App\Config\payment.php
```

Conteudo do arquivo 

```
<?php

return [

    'integrations' => [
    
        'bradesco' => [
            'user'            => env('BRADESCO_BOLETO_AUTH', ''),
            'merchant_id'     => env('BRADESCO_BOLETO_MERCHANTID', ''),
            'secret_key'      => env('BRADESCO_BOLETO_MERCHANTKEY', ''),
            'create_endpoint' => env('BRADESCO_ENDPOINT', ''),
            'search_endpoint' => env('BRADESCO_ENDPOINT_SEARCH', ''),
        ],
        
    ]
];

```

## 📦 Desenvolvimento

Caso tenha divas enviar e-mail para eailam2010@gmail.com

## 🛠️ Construído com

Mencione as ferramentas que você usou para criar seu projeto

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - O framework web usado
* [Maven](https://maven.apache.org/) - Gerente de Dependência
* [ROME](https://rometools.github.io/rome/) - Usada para gerar RSS


## ✒️ Autores

* **Railam Ribeiro** 
* **Mateus Hack**


## 📄 Licença

Este projeto está sob a licença **MIT**

---
⌨️ com ❤️ por [ Railam Ribeiro Messias ] 😊
