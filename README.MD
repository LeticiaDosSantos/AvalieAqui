##Esse projeto foi desenvolvido com fins acadêmicos para Projeto de Conclusão de Curso Técnico em Informática no Instituto Federal Catarinense, em 2019.

O projeto é um site web de pesquisa e avaliação de restaurantes. Toda a documentação, base de dados e código fonte estão presentes nesse repositório.
Segue abaixo as orientações para instalação do ambiente.

O programa não possui orientação à objetos e não conta com atualização de código após o ano de 2019.
##
Para que o projeto funcione corretamente no Windows siga o passo a passo:
- instale o xampp
- dê "start" no MySQL e Apache
- coloque o projeto na pasta htdocs
- cria uma base de dados chamada "avalie-aqui"
- importe para a base de dados (avalie-aqui) o arquivo sql que está na pasta "banco"
- abra o aquivo "banco" e mude dbname/dbsenha conforme suas configurações (ex.: "root"/" "), faça o mesmo no arquivo Conexao2.class.php (o arquivo está na pasta class)
- abra a pasta do projeto através do localhost

Para que o projeto funcione corretamente no Linux siga o passo a passo:
- coloque o projeto na pasta public_html
- cria uma base de dados chamada "avalie-aqui"
- importe para a base de dados (avalie-aqui) o arquivo sql que está na pasta "banco"
- abra o aquivo "banco" e mude dbname/dbsenha conforme suas configurações (ex.: "root"/"root"), faça o mesmo no arquivo Conexao2.class.php (o arquivo está na pasta class)
- abra a pasta do projeto através do localhost
