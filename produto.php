<?php
    $conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
    $dados = mysqli_query($conexao, "SELECT * FROM produtos where id=". $_GET['id']);
    $produto = mysqli_fetch_array($dados);


    $cabecalho_css = '<link rel="stylesheet" href="css/produto.css">';
    $cabecalho_title = "Produto da Mirror Fashion"; 
    include("cabecalho.php"); 
?>

<div class="produto-back">
    <div class="container">
        <div class="produto">
        <h1><?= $produto['nome'] ?> </h1>
            <p>por apenas <?= $produto['preco'] ?> </p>

            <form action="checkout.php" method="POST">
                <div id="interface">
                    <fieldset class="cores">
                        <legend>Escolha a cor:</legend>
                    
                        <input type="radio" name="cor" value="verde" id="verde" checked>
                        <label for="verde">
                            <img src="img/produtos/foto<?= $produto['id'] ?>-verde.png" alt="verde">
                        </label>

                        <input type="radio" name="cor" value="rosa" id="rosa">
                        <label for="rosa">
                            <img src="img/produtos/foto<?= $produto['id'] ?>-rosa.png" alt="rosa">
                        </label>

                        <input type="radio" name="cor" value="azul" id="azul">
                        <label for="azul">
                            <img src="img/produtos/foto<?= $produto['id'] ?>-azul.png" alt="azul">
                        </label>
                        
                    </fieldset>

                    <fieldset class="tamanho">
                        <legend>Escolha o tamanho:</legend>

                        <input type="range" name="tamanho" min="34" max="54" value="38" step="2">
                        <output for="tamanho" name="valortamanho">42</output>
                    </fieldset>
                </div>
                    
                    <input type="submit" class="comprar" value="Comprar">
                    <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                    <input type="hidden" name="preco" value="<?= $produto['preco'] ?>" id="preco">
                    <input type="text" list="cidades" autocomplete="on">
                    <datalist id="cidades">
                        <option value="Bras??lia">
                        <option value="Rio de Janeiro">
                        <option value="S??o Paulo">
                    </datalist>
                    <span class="glyphicon glyphicon-thumbs-up"></span>
                    <input type="text" pattern="^@\w{2,}" name="usuario_twitter">

            <div class="detalhes"> 
                <h2>Detalhes do produto</h2>
                <p><?= $produto['descricao'] ?> </p>
                <table>
                    <thead> 
                        <tr>
                            <th>Caracter??stica</th>
                            <th>Detalhe</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td>Modelo</td>
                            <td>Cardig?? 7845</td>
                        </tr>
                        <tr>
                            <td>Material</td>
                            <td>Algod??o e poliester</td>
                        </tr>
                        <tr>
                            <td>Cores</td>
                            <td>Azul, Rosa e Verde</td>
                        </tr>
                        <tr>
                            <td>Lavagem</td>
                            <td>Lavar a m??o</td>
                        </tr>
                    </tbody>
                </table>
            </div>      
        </div>
    </div>
</div>

<?php include("rodape.php"); ?>


