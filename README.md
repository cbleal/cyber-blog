# Cyber Blog

## Projeto Principal do Blog PHP

Para a utilização deste projeto, se faz necessário a utilização de algumas tecnologias, dentre elas:

* PHP 7.2^
* Banco de Dados MYSQL
* Composer
* Git

O projeto está em desenvolvimento, e qualquer alteração pode acarretar em erros, aguarde a versão final.

# Configuração

O arquivo de configuração fica na pasta **app/config** contendo o arquivo **config.php** e uma subpasta chamda de **env** contendo o arquivo final de configuração para ambiente local qa e produção.

# config.php
Faz uma validação através de uma variável para verificar qual arquivo será utilizado.

Mude o valor da variável **$prod** para true se quiser carregar os arquivos de configuração de prod, mas caso queira utilizar o arquivo de configurações locais, basta manter o valor da variável para false.