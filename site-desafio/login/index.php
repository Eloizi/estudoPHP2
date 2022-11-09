<?php
require_once("../templates/header.php");
?>

<title>Tela de Login</title>
</head>

<body class="Loginbody">
    <a class="Login-a" href="../index.php">Voltar</a>

    <div class="tela-login">
        <h1>Login</h1>
        </br>
        <form action="../src/testLogin.php" method="POST">
            <input class="Login-input" type="text" name="email" placeholder="email...">
            </br></br>
            <input class="Login-input" type="password" name="senha" placeholder="Senha...">
            </br></br>
            <input class="inputSubmit" type="submit" onclick="alerta()" name="submit" value="Enviar">
            </br></br>
            <button class="inputSubmit"><a class="Login-a" href="cadastro.php">Cadastrar</a></button>
        </form>
    </div>
</body>

</html>