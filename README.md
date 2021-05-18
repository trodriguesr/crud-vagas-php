# crud-vagas-php
Crud simples usando PHP, MySql, Materialize, Docker.

## Assuntos Abordados no Desenvolvimento do Projeto:

- Acesso a banco de dados com o MySql
- Otimização da conexão com o banco de dados através do PDO (PHP Data Object)
- Uso de linguagens: PHP, CSS, HTML
- Uso do framework Materialize para realização de um layout para o projeto.
- Uso do ambiente LAMP com Docker.

## Configuração do Projeto:

- É necessário rodar o Composer para que sejam criados os arquivos responsáveis pelo autoload das classes. Rode o comando: composer install dentro da pasta do projeto.
- Executar a query db_vcancies.sql ou importar o arquivo no phpMyAdmin para criar a tabela necessária.
- Editar o arquivo **Database.php**

## Container
- Dentro da pasta do projeto executar o comando: docker-compose up -d . Com isso, o ambiente do projeto irá subir na porta 80.
- O Adminer subirá na porta 8082 para administrar o banco.
