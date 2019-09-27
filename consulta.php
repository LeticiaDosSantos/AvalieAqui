<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Palavras chave separadas por virgulas" />
    <meta name="description" content="Texto resumido aparecera nos resultados de busca atalhos" />
    <meta name="author" content="Nome do autor">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <title>Título Aba</title>
    <!-- Bootstrap CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- JQuery 1 e 2 and 3 -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Cidades e Estados JS - ultima versao google -->
    <script src="cidades-estados-1.2-utf8.js"></script>

  </head>
  <body>
    <div class="container">
        <div style="margin: 40px;">
            <h4 class="title">SELECT E ESTADOS DO GOOGLE</h4>
            <small>Mais detalhes podem ser vistos na origem no google:
                <a href="https://code.google.com/archive/p/cidades-estados-js/downloads" target="_blank">  https://code.google.com/archive/p/cidades-estados-js/downloads</a>
            </small>
        </div>
        <div class="form-group">
          <div class="col-lg-8">
            <label for="select" class="control-label">Selecione o Estado:</label>
            <select id="estado" class="form-control"></select>
            <br>
            <label for="select" class="control-label">Selecione a Cidade:</label>
            <select  id="cidade" class="form-control"></select>
          </div>
        </div>
    </div>
  </body>
  <script type="text/javascript">
  //CIDADES E ESTADOS
  new dgCidadesEstados({
    cidade: document.getElementById('cidade'),
    estado: document.getElementById('estado'),
    change: true
});
  </script>
</html>
