# Passos para rodar o sistema

1: Baixar o xampp 

2: Instalar o php e o mysql usando o xampp

3: No vs, baixar as extensões,  php e php server

4: Configurar o php server, dizendo o navegador de execução (ex: chrome), a porta (3000) e os caminhos para php.ini e php.exe, geralmente tão dentro da pasta do php, que fica na xampp

5: Baixar a pasta e colocar na pasta htdocs que fica localizada em xampp: (ex: "C:\xampp\htdocs")

6: // Iniciar o Apache e mysql no xampp

7: Clicar em: Admin relacionado ao MySQL

8: No phpMyAdmin criar um novo banco de dados com nome (sem as aspas): "ponto"

9: Clicar no banco de dados e depois em "Importar"

10: Clicar em "Escolher arquivo", navegar até a pasta que contém os códigos e escolher o arquivo: "ponto.sql"

11: // Abrir a pasta no VsCode

12: // Clicar no arquivo: "login\index.php"

13: // Clicar com o botão direito em cima do código de "login\index.php" e selecionar PHP Server: Reload server

14: // verificar no arquivo php.ini (fica dentro de xampp/php) se a extenção mysqli ta sem um ; (linha 944 do arquivo), se tiver, apagar e salvar o arquivo

Depois disso é só ser feliz
Os passos 6, 11, 12, 13 devem ser feitos toda vez que for iniciar o sistema, os outros não necessariamente, apenas
execute o 7 se quiser ver o banco de dados

*Importante:* Acesso do supervidor-> email: "supervisor@gmail.com" senha: "supervisor2023"

Imagem do passo 4:
![image](https://github.com/Gustavohonoras/Sistemna_de_ponto_include/assets/108849824/5958ba1a-9fa3-42bc-90e7-5ef7ebe3ff21)
