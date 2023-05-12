<?php
   if (isset($_POST['submit'])) {
     // print_r($_POST['nome']);
     // print_r('<br>');
     // print_r($_POST['nome_user']);
     // print_r('<br>');
     // print_r($_POST['cpf']);
     // print_r('<br>');
     // print_r($_POST['data_nasc']);
     // print_r('<br>');
     // print_r($_POST['sexo']);
     // print_r('<br>');
     // print_r($_POST['telefone']);
     // print_r('<br>');
     // print_r($_POST['email']); 
     // print_r('<br>');
     // print_r($_POST['senha']); 


     include_once('config.php');

     $nome = $_POST['nome'];
     $nome_user = $_POST['nome_user'];
     $cpf = $_POST['cpf'];
     $data_nasc = $_POST['data_nasc'];
     $sexo = $_POST['sexo'];
     $telefone = $_POST['telefone'];
     $email = $_POST['email'];
     $senha = $_POST['senha'];

     $result = mysqli_query($conexao, "INSERT INTO cadastro_usuario(nome,nome_user,cpf,data_nasc,sexo,telefone,email,senha)
      VALUES ('$nome','$nome_user','$cpf','$data_nasc',' $sexo',' $telefone',' $email','$senha')");
    } 
   
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anuphan&display=swap" rel="stylesheet">

<link rel="icon" type="image/png" href="https://trello.com/1/cards/63ffa5897916089f7cd3e4db/attachments/643ef96421929a355efb832d/previews/643ef96521929a355efb8332/download/logo.png"/>
    
    <title>Ajuda Sem Fronteiras</title>
</head>
<body>
    <!-- Header -->
        <div class="header">
            <div class="allLogoSearch">
                <div class="logo-barra">
                    <img src="img/Logo/Logo.png" height="70px" width="70px">
                </div>
                    <div class="search-box">
                        <div class="row">
                            <input type="text" id="input-box" autocomplete="off">
                            <button type="submit"><img src="https://trello.com/1/cards/6415fa7fa0463b928860f307/attachments/643dc8e57d8a22909cc4361c/previews/643dc8e67d8a22909cc43624/download/LupaRoxa.png"></button>
                        </div>
                    </div>
            </div>
            
            <nav class="header-botoes">
                <a href=""></a>
                <button type="submit" class="btn">Home</button>
                <a href="">
                    <button type="submit" class="btn">Requisitar</button>
                </a>
                <a href=""></a>
                <button type="submit" class="btn">Ajuda Monetária</button>
            </nav>
        </div>
    

    <div class="corpo">
        <div class="wrapperCorpo">
            
            
           <form action="cadastro.php" method="post">
            <nav class="cadastro">

                <!-- ajeitando o cadastro-->

                <div class="txtNameCadastro">
                    <div id="caixaCadastroText">
                    <h1 id="textCadastroText">Cadastro</h1>
                    </div>
                    <p>Nome</p>
                    <input type="text" name="nome" id="nome" autocomplete="off" class="cadastro-nome">
                </div>
                <button type="submit" class="botao img"><img src="https://www.clker.com/cliparts/Z/J/g/U/V/b/avatar-male-silhouette-md.png">Adicionar Imagem</button>
            </nav>

            <nav class="cadastro">
                <div class="txtNameCadastro">
                    <p>Nome de usuário</p>
                <input type="text" name="nome_user" id="nome_user" autocomplete="off" class="cadastro-usuario">
                </div>
                <div class="tctNameCdastro">
                <p>CPF</p>
                <input type="text" name="cpf" id="cpf" placeholder="000.000.000-00" autocomplete="off" class="cadastro-cpf">
                </div>
            </nav>

            <nav class="cadastro">
                <div class="txtNameCadastro">
                <p>Data de Nascimento</p> 
                <input type="text" name="data_nasc" id="data_nasc" placeholder="dd/mm/aaaa" autocomplete="off" class="cadastro-nascimento">
                </div>
                <div class="txtNameCadastro">
                <p>Sexo</p>
                <select name="sexo" id="sexo">
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                </select>
                </div>
                <div class="txtNameCadastro">
                <p>Telefone</p>
                <input type="text" name="telefone" id="telefone" placeholder="( 00 ) 00000 - 0000" autocomplete="off" class="cadastro-telefone">
                </div>
            </nav>
                
            <nav class="cadastro">
                <div class="txtNameCadastro">
                <p>Email</p><input type="text" name="email" id="email" autocomplete="off" class="cadastro-email">
                </div>
                <div class="txtNameCdastro">
                <p>Senha</p><input type="text" name="senha" id="senha" placeholder="••••••••••••••••••" autocomplete="off" class="cadastro-senha">
                </div>
            </nav>
            
                <div class="alinhar">
                    <div id="questCadastro">
                        <h3>Deseja doar ou requisitar?</h3>
                        
                        <div class="coluna">
                            <input type="checkbox" id="check-box" class="check-box"><p>Doar</p>
                            <input type="checkbox" id="check-box" class="check-box"><p>Requisitar</p>
                        </div>
                    </div>
                    
                    <div id="questCadastroTermos">
                        <h3>Concorda com nossos termos?</h3>
                        <div class="coluna">
                            <input type="checkbox" id="check-box" class="check-box"><p id="termosCadastro">Concordo com os termos</p>
                        </div>
                    </div>                                                          
                </div>    
            <center><button type="submit" name='submit' class="btn">Validar</button></center>
         </div>
          </div>      
         </form>
    
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