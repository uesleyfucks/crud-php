<?php include_once 'func.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
    ></script>
    <title>Pagina de Login-Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--aqui verifica se não apareceu nenhuma mensagem de erro-->
    <div class="container">
        <div class="forms-container">
            <!--Login e Cadastro-->
            <div class="signin-signup">
                <!--Formulario de Login-->
                <form action="validacao.php" method="post" class="sign-in-form">
                    <h2 class="titulo">Entrar</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Nome de usuario" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="senha" placeholder="Senha" required>
                    </div>
                    <input type="submit" value="login" class="btn solid">

                    <p class="social-text">Ou faça login atravez de</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
                <!--Formulario de criação de conta-->
                <form action="cadastro.php" method="post" class="sign-up-form">
                    <h2 class="titulo">Registrar-se</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username"  placeholder="Nome de usuario" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" name="email"  placeholder="Email" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="senha"  placeholder="Senha" required>
                    </div>
                    <input type="submit" name="cadastro" value="Registrar-se" class="btn solid">

                    <p class="social-text">Ou faça cadastro atravez de</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!--Blocos de login e cadastro-->
        <div class="panels-container">
            <!--Bloco de login-->
            <div class="panel left-panel">
                <div class="content">
                    <h3>Novo aqui?</h3>
                    <p>chega mais ( ͡° ͜ʖ ͡°) </p>
                    <button class="btn transparent" id="sign-up-btn">Criar conta</button>

                    <img src="images/register.svg" class="image" alt="">
                </div>
            </div>
            <!--Bloco de cadastro-->
            <div class="panel right-panel">
                    <div class="content">
                        <h3>Ja tem conta?</h3>
                        <p>vamos lá!!!</p>
                        <button class="btn transparent" id="sign-in-btn">Entrar</button>
    
                        <img src="images/log.svg" class="image" alt="">
            </div>
        </div>
    </div>

    <script src="javascript/app.js"></script>
</body>
</html>