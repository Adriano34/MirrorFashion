<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <meta charset="UTF-8">
            <title>Checkout Mirror Fashion</title>
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div class="jumbotron">
            <div class="container">
                <h1>Ótima escolha!</h1>
                <p>Obrigado por comprar na Mirror Fashion!
                    Preencha seus dados para efetivar a compra.</p>
            </div>
        </div>
        
        <div class="container">
        <form>
            <fieldset>
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
                        required="000.000.000-00">
                </div>

                <div class="checkbox">
                    <label>
                    <input type="checkbox" value="sim" name="spam" checked>
                        Quero receber spam da Mirror Fashion
                </label>
                </div>
            </fieldset>

            <fieldset>
                <legend>Cartão de crédito</legend>
                <div class="form-group">
                    <label for="numero-cartao">Número - CVV</label>
                    <input type="text" class="form-control"
                    id="numero-cartao" name="numero-cartao">
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

            <button type="submit" class="btn btn-primary">
                Confirmar Pedido
                <span class="glyphicon glyphicon-thumbs-up"></span>
            </button>
        </form>

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
    </body>
</html>