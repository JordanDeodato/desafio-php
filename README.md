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

Obs: A instalação do Xampp ou do Laragon é utilizado para obter tanto o PHP(linguagem de programação base para o Laravel) quanto o Apache(servidor)

Passo a passo para executar o programa:

1 - Faça o clone do projeto através dessa página: github.com/JordanDeodato/desafio-php

2 - Atualize o Composer através do *composer update*

3 - Crie os arquivos .env através do comando *cp .env.example .env*

4 - Gere a chave padrão para execução do projeto com o comando *php artisan key:generate*

5 - Crie um banco de dados juntamente as tabelas com o comando *php artisan migrate*

6 - Insira os dados automaticamente com o comando *php artisan db:seed*

7 - Por último utilize o comando *php artisan serve* para rodar a aplicação.
