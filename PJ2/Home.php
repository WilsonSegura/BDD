<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/home.css">
    <script src="js/home.js" defer></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anuphan&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="shortcut icon" href="img/Logo/Logo.png" type="image/x-icon">

    <title>Ajuda Sem Fronteiras</title>
</head>
<body>
    <div class="header">
        <div class="logo-barrapesq">
        <img src="img/Logo/Logo.png">
        <input type="text" id="input-box" autocomplete="off" class="search-box">
        </div>
        <h1>O mundo precisa de solidariedade<br> seja um motivador! Ao doar você inspira amor<br>e influência outras pessoas a praticarem atos de bondade</h1>
        <a href="cadastro.php">
            <button type="submit" class="btn">Doar</button>
        </a>
        <div class="PopUpLogin">

            <button class="open-button" onclick="openForm()">Fazer Login</button>

            <!-- The form -->
            <div class="form-popup" id="myForm">
                <form action="testelogin.php" method="POST" class="form-container">
                    <h1>Login</h1>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Email" name="email" required>

                    <label for="psw"><b>Senha</b></label>
                    <input type="password" placeholder="Senha" name="senha" required>

                    <input type="submit" name="submit" class="btn"></input>
                    <button type="button" class="btn cancel" onclick="closeForm()">Fechar</button>
                </form>
            </div>

            <!-- script do formulario login/pop-up-->
            <script>
                function openForm() {
                    document.getElementById("myForm").style.display = "block";
                }

                function closeForm() {
                    document.getElementById("myForm").style.display = "none";
                }
            </script>

        </div>
    </div>

    <!-- Doação Requisitadas -->

    <div class="backgroundDoacaoRequisitadas">
        <div class="tituloDoacaoRequisitadas">
            <h1 id="txtTituloDoacaoRequisitadas">Doações mais Requisitadas</h1>
        </div>
        <div class="doacaoRequisitadas">
            <div class="wrapperDoacaoRequisitadas">
                <i id="left" class="fa-solid fa-angle-left"></i>
                <div class="carrosselDoacaoRequisitadas">
                    <div class="caixa">
                        <div class="img"><img src="img/Doações Requisitadas/Suprimentos.png" alt="img" draggable="false"></div>
                        <h2>Suprimentos</h2>
                    </div>
                    <div class="caixa">
                        <div class="img"><img src="img/Doações Requisitadas/Educação.png" alt="img" draggable="false"></div>
                        <h2>Educação</h2>
                    </div>
                    <div class="caixa">
                        <div class="img"><img src="img/Doações Requisitadas/Alimentos.png" alt="img" draggable="false"></div>
                        <h2>Alimentos</h2>
                    </div>
                    <div class="caixa">
                        <div class="img"><img src="img/Doações Requisitadas/Roupas.png" alt="img" draggable="false"></div>
                        <h2>Roupas</h2>
                    </div>
                    <div class="caixa">
                        <div class="img"><img src="img/Doações Requisitadas/Animais.png" alt="img" draggable="false"></div>
                        <h2>Animais</h2>
                    </div>
                </div>
                <i id="right" class="fa-solid fa-angle-right"></i>
            </div>
        </div>
    </div>

    <!-- Categorias de Campanha -->
    <div class="categoriacampanha">
        <h1>Categorias de campanha</h1>
        <div class="colunas">
            <div class="coluna1">
                <div class="texto"><h3>A doação de medicamentos é uma forma importante de ajudar a garantir o acesso à saúde para as pessoas mais necessitadas, contribuindo para a melhoria da qualidade de vida e a promoção da dignidade humana.</h3>
                <img src="img/Categorias de Campanhas/saude.png" alt="saude">
                </div>                
                <h2>Saúde</h2>
                    <div class="texto"><h3>As campanhas sem fins lucrativos são uma forma de promover a solidariedade e a cooperação entre as pessoas, buscando soluções para os problemas que afetam a sociedade de forma ampla e inclusiva.</h3>
                    <img src="img/Categorias de Campanhas/campanha.png" alt="organizacoes sem fins lucrativos">
                    </div>
                    <h2>Organizações sem fins lucrativos</h2>    
            </div>
            <div class="coluna2">
                <div class="texto"><h3>Os serviços oferecidos pela ASF para  funerais podem variar, mas geralmente incluem assistência financeira para cobrir os custos do funeral, como caixão, serviços funerários e cremação ou sepultamento.</h3>
                    <img src="img/Categorias de Campanhas/funeral.png" alt="funeral">
                    </div>
                <h2>Funeral</h2>
                <div class="texto"><h3>Ajuda monetária emergencial é um tipo de assistência financeira oferecida em situações de emergência, como desastres naturais, crises econômicas, pandemias ou outras situações imprevistas. </h3>
                    <img src="img/Categorias de Campanhas/emergencia.png" alt="emergencia financeira">
                    </div>
                <h2>Emergência financeira</h2>                
            </div>
            <div class="coluna3">
                <div class="texto"><h3>A ASF entende que a educação é um fator chave para promover mudanças positivas na sociedade e, por isso, busca desenvolver ações que estimulem a reflexão e o debate em torno de temas importantes. </h3>
                    <img src="img/Categorias de Campanhas/educacao.png" alt="educacao">
                    </div>
                <h2>Educação</h2>
                <div class="texto"><h3>O auxílio para pets é uma prática solidária que consiste em oferecer recursos financeiros, alimentos, medicamentos, roupas, brinquedos, entre outros itens, para animais de estimação que se encontram em situação de abandono, maus-tratos ou adoção.</h3>
                    <img src="img/Categorias de Campanhas/animais.png" alt="animais">
                    </div>
                <h2>Animais</h2>
            </div>
        </div>
    </div>

    <!-- Perguntas Frequentes -->
    <div class="backgroundPerguntasFrequentes">
        <section class="caixaPerguntasFrequentes">
            <h2 class="tituloPerguntasFrequentes">Perguntas Frequentes</h2>

            <div class="perguntasFrequentes">
                <div class="perguntas">
                    <h3>XXXXXXXXXXXXXXXXXXX</h3>

                    <i id="right" class="fa-solid fa-angle-down"></i>

                </div>
                <div class="resposta">
                    <p>
                        Uma boa introdução conversa diretamente com o título e o desenvolvimento do seu texto. Ela requer dinamismo e fluidez da explicação, além da organização das ideias de forma simplificada. Ainda que objetiva, a introdução precisa ser chamativa.
                    </p>
                </div>
            </div>


            <div class="perguntasFrequentes">
                <div class="perguntas">
                    <h3>XXXXXXXXXXXXXXXXXXX</h3>

                    <i id="right" class="fa-solid fa-angle-down"></i>

                </div>
                <div class="resposta">
                    <p>
                        Uma boa introdução conversa diretamente com o título e o desenvolvimento do seu texto. Ela requer dinamismo e fluidez da explicação, além da organização das ideias de forma simplificada. Ainda que objetiva, a introdução precisa ser chamativa.
                    </p>
                </div>
            </div>


            <div class="perguntasFrequentes">
                <div class="perguntas">
                    <h3>XXXXXXXXXXXXXXXXXXX</h3>

                    <i id="right" class="fa-solid fa-angle-down"></i>

                </div>
                <div class="resposta">
                    <p>
                        Uma boa introdução conversa diretamente com o título e o desenvolvimento do seu texto. Ela requer dinamismo e fluidez da explicação, além da organização das ideias de forma simplificada. Ainda que objetiva, a introdução precisa ser chamativa.
                    </p>
                </div>
            </div>
        </section>
    </div>

    <!-- Quem Somos -->
    <div class="backgroundQuemSomos">
        <div class="wrapperQuemSomos">
            <div class="imgQuemSomos">
                <img src="img/Quem Somos/Quem Somos.png" alt="Imagem Quem Somos">
            </div>
            <div class="allTextoQuemSomos">
                    <h1>Quem Somos</h1>
                <div class="textoQuemSomos">
                    <p>Somos uma equipe composta por Anellise, Luiz Fellipe e Angelo, estudantes do curso Técnico em Informática para Internet do IFSP de Caraguatatuba. Nosso objetivo é ajudar as pessoas a doar e receber doações de forma fácil e segura através da internet. Estamos empenhados em criar uma plataforma intuitiva e acessível para conectar doadores e receptores, e contribuir para uma sociedade mais solidária e colaborativa. Agradecemos sua visita e estamos à disposição para ajudá-lo(a) em qualquer questão relacionada ao nosso projeto.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer id="footer">
        <div class="wrapper">
            <div class="allFooter">

                <!-- Email / Assinar-->

                <div class="textoAssinar">
                    <h3 id="txth3">Fique conectado</h3>
                    <p id="txtp">Receba atualizações e novas<br>notificações sobre nosso projeto.</p>

                    
                        <form action="Assinar o Email" id="allEmailButton">
                            <input type="email" id="txtEmail" placeholder="Email:">
                            <button id="elemButton">Assinar</button>
                        </form>

                    <nav class="allRedesSociais">
                        <a href="#">
                            <img id="icon01" src="img/RedesSocias/Instagram.png" alt="iconInstagram">
                        </a>
                        <a href="#">
                            <img id="icon02" src="img/RedesSocias/Whatsapp.png" alt="iconWhatsapp">
                        </a>
                        <a href="#">
                            <img id="icon03" src="img/RedesSocias/Facobook.png" alt="iconFacebook">
                        </a>
                        <a href="#">
                            <img id="icon04" src="img/RedesSocias/Outlook.png" alt="iconOutlook">
                        </a>
                        <a href="#">
                            <img id="icon05" src="img/RedesSocias/Twitter.png" alt="iconTwitter">
                        </a>
                        <a href="#">
                            <img id="icon06" src="img/RedesSocias/Gmail.png" alt="iconGmail">
                        </a>
                    </nav>
                </div>


                <!-- Logo / Name -->
                
                    <nav class="logoName">
                        <a href="#">
                            <img id="logoFooter" src="img/Logo/Logo.png" alt="Logo Do footer">
                        </a>
                        <p id="txtLogoName01">A doação transforma, o amor<br> abstrato em um ato concreto.</p>
                        <p id="txtLogoName02">-Ajuda Sem Fronteiras</p>
                    </nav>

                    <!-- Apoiadores -->

                    <div class="apoiadores">
                        <p id="txtApoiadores">Empresas que apoiam nossa campanha</p>
                        
                        <nav class="allApoiadoresTop">
                            <a href="#">
                                <img id="iconApoiadores01" src="img/Apoiadores/PagSeguro.png" alt="Icon Apoiadores PagSeguro">
                            </a>
                            <a href="#">
                                <img id="iconApoiadores02" src="img/Apoiadores/AmericanExpress.png" alt="Icon Apoiadores AmericanExpress">
                            </a>
                            <a href="#">
                                <img id="iconApoiadores03" src="img/Apoiadores/Santander.png" alt="Icon Apoiadores Santander">
                            </a>
                            <a href="#">
                                <img id="iconApoiadores04" src="img/Apoiadores/Nubank.png" alt="Icon Apoiadores Nubank">
                            </a>
                        </nav>
                        <nav class="allApoiadoresEnd">
                            <a href="#">
                                <img id="iconApoiadores05" src="img/Apoiadores/PayPal.png" alt="Icon Apoiadores PayPal">
                            </a>
                            <a href="#">
                                <img id="iconApoiadores06" src="img/Apoiadores/BancodoBrasil.png" alt="Icon Apoiadores BancodoBrasil">
                            </a>
                            <a href="#">
                                <img id="iconApoiadores07" src="img/Apoiadores/Bradesco.png" alt="Icon Apoaidores Bradesco">
                            </a>
                            <a href="#">
                                <img id="iconApoiadores08" src="img/Apoiadores/PicPay.png" alt="Ico Apoaidores PicPay">
                            </a>
                        </nav>
                    </div>
            </div>   
        </div> 
    </footer>
    <!-- Coryright -->
    <div id="copyright">
        <a href="#"><p id="txtcoryright">copyright © 2023<br>Todos os direitos reservados</p></a>
    </div>

</body>
</html>