<?php
    session_start();
// print_r($_REQUEST);

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    //Acessa o sistema
    include_once("config_login.php");
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // print_r('Email: ' . $email);
    // print_r('Senha: ' . $senha);

    $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";

    $result = $conexao->query($sql);
    // print_r($sql);
    // print_r($result);
    if (mysqli_num_rows($result) < 1) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        echo '<script>alert("Os dados inseridos estão incorretos!");location.href="../login/index.php";</script>';
        // header('Location: ../login/index.php');

    } else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: ../view/admin/index.php');
    }
} else {
    //Acessa o sistema
    header('Location: ../login/index.php');
}
