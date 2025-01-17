<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/principal.css">
   
    
    <title>Pagina Principal</title>
</head>
<body>
    <!-- cabecalho -->
    <header>
        <h1 class="logo"><a href="index.php">SoPallet</a></h1>
        <nav>
            <ul>
                <li><a href="index.php">Principal</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#">Perfil</a></li>
                <li><a href="#footer">Contacto</a></li>
            </ul>
        </nav>  
        
        <span class="login">
        <form action="registo.php" method="post">
           <button >Registar</button>
        </form>
    </span>
    <span class="login">
        <form action="Login.php" method="post">
           <button >Entrar</button>
               
        </form>
        
    </span>
    
       
        
     
    </header>

    <!-- parte do corpo -->
    <main id="principal">
        <div class="apresentacao">
            <h1 class="slogan">Melhores <span style="color:rgb(228, 228, 37);">Móveis</span><br>
                De <em style="color:rgb(228, 228, 37);">PALLET</em></h1>
            <div class="textual">
                <form action="produtos.php" method="post">
                    <button >Ver Produtos</button>
                </form>
                <button><a href="#">Quero vender</a></button>

            </div>
            <img src="imagens/img_principal.jpg" alt="imagem">
        </div>

        <!-- descricao -->
        <div id="sobre">
        <img src="imagens/about-bg.png" alt="about">
        <div id="img"><img id="img2" src="imagens/pallet.png"></div>
        <div class="texto">
            Encontre aqui os melhores móveis e acessórios feitos de madeira 100% reciclada Pallet.
            Encontre de deste materiais para cozinha, quarto, casa de banho, sala e mais...
            Móveis belos, e de qualidades ao melhor preço do mercado. <br> Tudo 100% MOZ e com entrega gratuita incluida.
            Decore a sua casa conosco e sem agredir o ambinte com os nossos produtos. 
            Feitos a mão por profissionais qualificados na área para lhe proporcionar amenas o melhor. 
            Faça ja a sua compra! Clicando logo abaixo.
            <div class="textual">
                <form action="produtos.php" method="post">
                    <button >Ver Produtos</button>
                </form>

            </div>

        </div>

        </div>      
        
    </main>
    
    <!-- contacto no footer footer -->
    <footer id="footer">
        <!-- informacoes de contacto, endereco, email, telefone, icons,  -->
        <h1 class="logo logo-foot"><a href="index.html">SoPallet</a></h1>
        <nav class="nav-foot">
            <ul class="ul-foot">
                <li class="li-foot"><a href="index.html">Principal</a></li>
                <li class="li-foot"><a href="#sobre">Sobre</a></li>
                <li class="li-foot"><a href="#">Perfil</a></li>
                <li class="li-foot"><a href="#footer">Contacto</a></li>
            </ul>
        </nav>
        <!-- icons de contacto -->
        <div class="icons">
            <ul>
                <li><img src="imagens/call-icon.png" alt="icon">845151007</li>
                <li><a href="#"><img src="imagens/email-icon.png" alt="icon">grupo@gmail.com</a></li>
                <li><a href="#"><img src="imagens/fb-icon.png" alt="icon">fb.com/sopalete</a></li>
                <li><a href="#"><img src="imagens/instagram-icon.png" alt="icon">instagram.com/sopalet</a></li>
                <li><a href="#"><img src="imagens/twitter-icon.png" alt="icon">twitter.com/sopalete</a></li>
            </ul>
        </div>

    <div class="direitos">
        Copyright 2022 todo o credito ao grupo.
    </div>
    </footer>

</body>
</html>