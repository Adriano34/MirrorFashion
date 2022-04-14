
<?php
    $cabecalho_title = "Produto da Mirror Fashion";
    include("cabecalho.php");
?>
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
            </section><!-- fim .menu-departamentos -->
            <a href="#" class="pause"></a>
            <img src="img/destaque-home.png" alt="Promoção: Big City Night">
            
        </div><!-- fim .container .destaque -->

        <div class="container paineis">
                <!-- os paineis de novidades e mais vendidos entrarão aqui dentro -->
            <section class="painel novidades">
                    <h2>Novidades</h2>
                    
                <ol>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura8.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                   
                    <!-- primeiro produto -->
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura1.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                            <img src="img/produtos/miniatura2.png">
                            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                            <img src="img/produtos/miniatura3.png">
                            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                            <img src="img/produtos/miniatura4.png">
                            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                            <img src="img/produtos/miniatura5.png">
                            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- coloque mais produtos aqui! -->
                </ol>
            </section>

            <section class="painel mais-vendidos">
                <h2>Mais vendidos</h2>
                
                <ol>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura14.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
               
                            <!-- primeiro produto -->
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura15.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                            <img src="img/produtos/miniatura9.png">
                            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                            <img src="img/produtos/miniatura10.png">
                            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                            <img src="img/produtos/miniatura11.png">
                            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                            <img src="img/produtos/miniatura12.png">
                            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- coloque mais produtos aqui! -->
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