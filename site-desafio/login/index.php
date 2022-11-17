<title>Tela de Login</title>

</head>

<body class="loginbody">
    <!-- chamando o estilo para a página -->
    <header>
        <link rel="stylesheet" href="../css/style.css">
    </header>

    <a class="login-a" href="../index.php">Voltar</a>

    <div class="tela-login">
        <h1>Login</h1>
        </br>
        <form action="../src/testLogin.php" method="POST">
            <input class="login-input" type="text" name="email" placeholder="email...">
            </br></br>
            <input class="login-input" type="password" name="senha" placeholder="Senha...">
            </br></br>
            <input class="inputSubmit" type="submit" onclick="alerta()" name="submit" value="Enviar">
            </br></br>
            <button class="inputSubmit"><a class="login-a" href="cadastro.php">Cadastrar</a></button>
        </form>
    </div>
</body>

</html>


<!--Tela de login desenvolvido com a ajuda do:
Gustavo Neitzke, link para a playlist:
<https://www.youtube.com/playlist?list=PLSHNk_yA5fNjoIRNHV-3FprsN3NWPcnnK> -->