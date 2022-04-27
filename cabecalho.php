<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $cabecalho_title; ?> <?= $produto['nome'] ?></title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet/less" href="less/estilos.less">
        <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
        <meta name="viewport" content="width=device-width">
        <?php echo @$cabecalho_css; ?>  
    <body>
<header class="container">
    <div class="cabecalho">
        <h1>
            <img src="img/logo.png" alt="Mirror Fashion">
        </h1>
        <p class="sacola">
            Nenhum item na sacola de compras
        </p>
        <nav class="menu-opcoes">
        <ul>
            <li><a href="#">Sua Conta</a></li>
            <li><a href="#">Lista de Desejos</a></li>
            <li><a href="#">Cartão Fidelidade</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="#">Ajuda</a></li>
        </ul>
    </nav>
       
</header>
  