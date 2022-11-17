<?php

if (isset($_POST['submit'])) {
    // print_r($_POST['nome']);
    // print_r($_POST['email']);
    // print_r($_POST['telefone']);
    // print_r($_POST['genero']);
    // print_r($_POST['data_nascimento']);
    // print_r($_POST['cidade']);
    // print_r($_POST['estado']);
    include_once('../src/config_login.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $senha = $_POST['senha'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuario(nome,email,telefone,sexo,senha,data_nasc,cidade,estado,endereco) VALUES('$nome', '$email', '$telefone', '$sexo', '$senha', '$data_nasc', '$cidade', '$estado', '$endereco')");
    header("Location: index.php");
}

?>


<title>Formulário</title>


</head>


<body class="Cadastro-body">
    <!-- chamando o estilo para a página -->
    <header>
        <link rel="stylesheet" href="../css/style.css">
    </header>

    <div class="Cadastro-box">
        <form action="cadastro.php" method="POST">
            <fieldset class="Cadastro-fieldset">
                <legend class="Cadastro-legend"><b>Formulário de Clientes</b></legend>
                <br>
                <div class="Cadastro-inputBox">
                    <input type="text" name="nome" id="nome" class="Cadastro-inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="Cadastro-inputBox">
                    <input type="password" name="senha" id="senha" class="Cadastro-inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="Cadastro-inputBox">
                    <input type="text" name="email" id="email" class="Cadastro-inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="Cadastro-inputBox">
                    <input type="tel" name="telefone" id="telefone" class="Cadastro-inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="Cadastro-inputBox">
                    <input type="text" name="cidade" id="cidade" class="Cadastro-inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="Cadastro-inputBox">
                    <input type="text" name="estado" id="estado" class="Cadastro-inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="Cadastro-inputBox">
                    <input type="text" name="endereco" id="endereco" class="Cadastro-inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit" />
                </br></br>
                <button class="inputSubmit"><a class="Cadastro-a" href="index.php">Voltar</a></button>
            </fieldset>
        </form>
    </div>
</body>

</html>

<!--Tela de cadastro desenvolvido com a ajuda do:
Gustavo Neitzke, link para a playlist:
<https://www.youtube.com/playlist?list=PLSHNk_yA5fNjoIRNHV-3FprsN3NWPcnnK> -->