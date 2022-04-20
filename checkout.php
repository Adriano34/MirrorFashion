<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap-flatly.css">
        <meta charset="UTF-8">
            <title>Checkout Mirror Fashion</title>
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Mirror Fashion</a>
            </div>
            <ul class="nav navbar-nav collapse navbar-collapse">
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="#">Ajuda</a></li>
                <li><a href="#">Perguntas frequentes</a></li>
                <li><a href="#">Entre em contato</a></li>
            </ul>
        </nav>
        <div class="jumbotron">
            <div class="container">
                <h1>Ótima escolha!</h1>
                <p>Obrigado por comprar na Mirror Fashion!
                    Preencha seus dados para efetivar a compra.</p>
            </div>
        </div>
        
        <div class="container">
        <form class="col-sm-8 col-lg-9">
            <div class="row">
                <fieldset class="col-md-6">
                    <legend>Dados pessoais</legend>
                    <div class="form-group">
                        <label for="nome">Nome completo</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="input-group">
                            <span class="input-group-addon">@</span>
                            <input type="email" class="form-control"
                                id="email" name="email">
                        </div>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="email@exemplo.com">
                    </div>

                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf"
                        data-mask="999.999.999-99"> 
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="sim" name="spam" checked>
                            Quero receber spam da Mirror Fashion
                        </label>
                    </div>
                </fieldset>
            </div>

            <fieldset class="col-md-6">
                <legend>Cartão de crédito</legend>
                <div class="form-group">
                    <label for="numero-cartao">Número - CVV</label>
                    <input type="text" class="form-control"
                    id="numero-cartao" name="numero-cartao" data-mask="9999 9999 9999 9999 - 999">
                </div>

                <div class="form-group">
                    <label for="bandeira-cartao">Bandeira</label>
                    <select name="bandeira-cartao" id="bandeira-cartao"
                        class="form-control">
                        <option value="master">MasterCard</option>
                        <option value="visa">VISA</option>
                        <option value="amex">American Express</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="validade-cartao">Validade</label>
                    <input type="month" class="form-control"
                    id="validade-cartao" name="validade-cartao">
                </div>
            </fieldset>

            <button class="navbar-toggle" type="button"
                data-target=".navbar-collapse" data-toggle="collapse">
                <span class="glyphicon glyphicon-align-justify"></span>
                <span class="glyphicon glyphicon-thumbs-up"></span>
            </button>
        </form>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel panel-sucess">
                <div class="panel-heading">
                <h2>Sua compra</h2>
                <img src="img/produtos/foto1-verde.png" alt="Fuzzy Cardigan"
                    class="img-thumbnail img-responsive">
            </div>
            
            <dl>
                <dt>Produto</dt>
                <dd>Fuzzy Cardigan</dd>

                <dt>Cor</dt>
                <dd>verde</dd>

                <dt>Tamanho</dt>
                <dd>40</dd>

                <dt>Preço</dt>
                <dd>R$ 129,00</dd>            
            </dl>
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/inputmask-plugin.js"></script>
    </body>
</html>