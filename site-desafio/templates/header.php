<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site-desafio</title>

    <link href="style.css" rell="stylesheet">

    <style>
        .header-body {
            margin: 0% auto;
            color: #212529;
            position: relative;
            width: 100%;
            text-align: center;
        }

        .addform {
            left: 50%;
            margin-top: 10%;
            justify-content: center;
        }

        h1,
        span {
            text-align: center;
            margin: 0 auto;
        }

        .Cadastro-body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(157, 142, 255), rgb(0, 106, 155));
        }

        .Cadastro-box {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }

        .Cadastro-fieldset {
            border: 3px solid whitesmoke;
        }

        .Cadastro-legend {
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }

        .Cadastro-inputBox {
            position: relative;
        }

        .Cadastro-inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .Cadastro-inputUser:focus~.labelInput,
        .Cadastro-inputUser:valid~.labelInput {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }

        #data_nascimento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit {
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        #submit:hover {
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }

        .inputSubmit {
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }

        .inputSubmit:hover {
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
            cursor: pointer;
        }

        .Cadastro-a {
            color: white;
        }

        .Cadastro-a:link {
            text-decoration: none;

        }

        .cadastro1 {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            text-decoration: none;
            position: absolute;
            left: 81%;
            top: 2.6%;
            color: black;
        }

        .cadastro1:hover {
            color: dodgerblue;
        }

        .Loginbody {
            font-family: Georgia, 'Times New Roman', Times, serif;
            background-image: linear-gradient(to right, rgb(113, 104, 176), rgb(169, 225, 251));
        }

        .tela-login {
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            /*Faz com que o elemento se fique diretamente no centro da página*/
            padding: 90px;
            border-radius: 15px;
            color: white;
        }

        .Login-input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        .inputSubmit {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }

        .inputSubmit:hover {
            background-color: deepskyblue;
            cursor: pointer;
        }

        .Login-a {
            color: white;
        }

        .Login-a:link {
            text-decoration: none;
        }

        .index-admin-navi {
            position: fixed;
            left: 90%;
            top: 0%;
            margin: auto;
        }
    </style>
</head>


<!-- parte do titulo de cima -->