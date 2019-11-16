# Pacientes
Sistema para gerenciamento de pacientes .
## WebSite
### Atual
### History
* http://35.184.202.43/clinic
## Instalação
### Pré-Requesitos
* PHP
### Passos
* Abra o arquivo .env para edição . O arquivo .env fica localizado na raiz desse sistema .
* Na linha 9 do arquivo .env coloque 'DB_CONNECTION=mysql' se usa MySQL ou 'DB_CONNECTION=pgsql' se usa PostGre
* Crie um banco de dados chamado 'pacientes'
* Na linha 12 do arquivo .env preencha o usuário do Banco De Dados
* Na linha 12 do arquivo .env preencha a senha do usuário do Banco De Dados
* Abra a linha de comando na raiz desse sistema e rode o seguinte comando
1. `php artisan migrate`
2. `php artisan serve`
