
<?php
    $cabecalho_title = "Produto da Mirror Fashion";
    include("cabecalho.php");
?>
<html>
    <title><?php print $cabecalho_title; ?> </title>
    <div class="container destaque">
        <section class="busca">
            <h2>Busca</h2>
            <form action="http://www.google.com.br/search" id="form-busca">>
                <input type="search" name="q" id="q">
                <input type="image" src="img/busca.png">
            </form>
        </section><!-- fim .busca -->

        <section class="menu-departamentos">
            <h2>Departamentos</h2>
            <nav>
                <ul>
                    <li><a href="#">Blusas e Camisas</a></li>
                    <li><a href="#">Calças</a></li>
                    <li><a href="#">Saias</a></li>
                    <li><a href="#">Vestidos</a></li>
                    <li><a href="#">Sapatos</a></li>
                    <li><a href="#">Bolsas e Carteiras</a></li>
                    <li><a href="#">Acessórios</a></li>
                </ul>
            </nav>
        </section>
        <a href="#" class="pause"></a>
        <img src="img/destaque-home.png" alt="Promoção: Big City Night">
        
    </div>

    <div class="container paineis">
        <section class="painel novidades">
                <h2>Novidades</h2>
            <ol>
                <?php
                    $conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
                    $dados = mysqli_query($conexao, "SELECT * FROM produtos");
                    while ($produto = mysqli_fetch_array($dados)):
                ?>
                <li>
                    <a href="produto.php?id=<?= $produto['id'] ?>">
                    <figure>
                        <img src="img/produtos/miniatura<?= $produto['id'] ?>.png"
                        alt="<?= $produto['nome'] ?> ">
                        <figcaption><?= $produto['nome'] ?> por <?= $produto['preco'] ?></figcaption>
                    </figure>
                    </a>
                </li>
                <?php endwhile; ?>
            </ol>
        </section>
    </div>

    <footer>
        <div class="container">
            <img src="img/logo-rodape.png" alt="Logo Mirror Fashion">
                <ul class="social">
                    <li><a href="http://facebook.com/mirrorfashion">Facebook</a></li>
                    <li><a href="http://twitter.com/mirrorfashion">Twitter</a></li>
                    <li><a href="http://plus.google.com/mirrorfashion">Google+</a></li>
                </ul>
        </div>
    </footer>
</html>