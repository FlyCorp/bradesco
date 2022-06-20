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

Adicione notas adicionais sobre como implantar isso em um sistema ativo

## 🛠️ Construído com

Mencione as ferramentas que você usou para criar seu projeto

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - O framework web usado
* [Maven](https://maven.apache.org/) - Gerente de Dependência
* [ROME](https://rometools.github.io/rome/) - Usada para gerar RSS

## 🖇️ Colaborando

Por favor, leia o [COLABORACAO.md](https://gist.github.com/usuario/linkParaInfoSobreContribuicoes) para obter detalhes sobre o nosso código de conduta e o processo para nos enviar pedidos de solicitação.

## 📌 Versão

Nós usamos [SemVer](http://semver.org/) para controle de versão. Para as versões disponíveis, observe as [tags neste repositório](https://github.com/suas/tags/do/projeto). 

## ✒️ Autores

Mencione todos aqueles que ajudaram a levantar o projeto desde o seu início

* **Um desenvolvedor** - *Trabalho Inicial* - [umdesenvolvedor](https://github.com/linkParaPerfil)
* **Fulano De Tal** - *Documentação* - [fulanodetal](https://github.com/linkParaPerfil)

Você também pode ver a lista de todos os [colaboradores](https://github.com/usuario/projeto/colaboradores) que participaram deste projeto.

## 📄 Licença

Este projeto está sob a licença (sua licença) - veja o arquivo [LICENSE.md](https://github.com/usuario/projeto/licenca) para detalhes.

## 🎁 Expressões de gratidão

* Conte a outras pessoas sobre este projeto 📢
* Convide alguém da equipe para uma cerveja 🍺 
* Obrigado publicamente 🤓.
* etc.


---
⌨️ com ❤️ por [Armstrong Lohãns](https://gist.github.com/lohhans) 😊
