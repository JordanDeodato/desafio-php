## Para executar o programa

## Pré Requisitos Para Execução do Programa
O programa contém as seguintes tecnologias:
* Laravel
* PHP
* Node.js
* HTML
* CSS
* Bootstrap
* Composer
* Less
* Xampp
* MySQL
* Laravel.mix
* phpMyAdmin
* Post Man ou outro programa que manipule API

Obs: A instalação do Xampp ou do Laragon é utilizado para obter tanto o PHP(linguagem de programação base para o Laravel) quanto o Apache(servidor)

Passo a passo para executar o programa:

1 - Faça o clone do projeto através dessa página: github.com/JordanDeodato/desafio-php

2 - Atualize o Composer através do *composer update*

3 - Crie os arquivos .env através do comando *cp .env.example .env*

4 - Gere a chave padrão para execução do projeto com o comando *php artisan key:generate*

5 - Crie um banco de dados juntamente as tabelas com o comando *php artisan migrate*

6 - Insira os dados automaticamente com o comando *php artisan db:seed*

7 - Por último utilize o comando *php artisan serve* para rodar a aplicação.

8 - Para manipular as APIs você precisa do programa *PostMan* ou outro manipulador de APIs para poder fazer alterações/visualizações

## Passo a passo para realizar alterações/visualizações da API:

* No arquivo *api.php* contém as rotas necessarias
* /products - Visualiza todos os produtos cadastrados no Banco de Dados em formato *json*
* /products/{id} - Visualiza um produto através do *id*
* /products - Cadastra um novo produto
* /products/{id} - Edita um produto já cadastrado
* /products/{id} - Exclui um produto cadastrado

Para poder manipular os dados da API você precisa:
* Abrir o Programa PostMan
* Copiar o link da ação que deseja realizar cole no local indicado no programa
* Escolha o método da ação que deseja fazer - GET: Ler os dados, POST: Criar um novo dado, PUT: Editar um dado, DELETE: Apagar um dado
* Visualize os dados na tela abaixo.

Obs: Lembrando que os dados da API são interligados com o banco de dados, portanto, qualquer alteração realizada lá irá ser alterada no projeto principal.
