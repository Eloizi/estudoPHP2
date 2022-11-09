<?php
session_start();
// print_r($_SESSION);
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
}

$logado = $_SESSION['email'];

require_once("../../src/config.php");
require_once("../../templates/header.php");
require_once("../../templates/links.php");
include '../../src/Artigo.php';

$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();
?>

<nav class="index-admin-navi">
        </br>
        <div class="d-flex">
                <a class="btn btn-danger me-5" href="">Sair</a>
        </div>
</nav>

</br>
<h1>Página Administrativa</h1></br>

<a class="btn btn-primary" href="addArtigo.php">Adicionar Artigo</a>
<a class="btn btn-secondary" href="../../index.php">Voltar</a>
<div class="col p-4 d-flex flex-column position-static">
        <table class="table">
                <thead>
                        <tr>
                                <th scope="col">ID</th>
                                <th scope="col">titulo</th>
                                <th scope="col">data</th>
                                <th scope="col">ação</th>
                        </tr>
                </thead>
                <tbody>
                        <?php foreach ($artigos as $art) : ?>
                                <tr>
                                        <th scope="row"><?php echo $art['id']; ?></th>
                                        <td><?php echo $art['titulo']; ?></td>
                                        <td><?php echo $art['data']; ?></td>
                                        <td>
                                                <nav>
                                                        <a class="btn btn-primary" href="editArtigo.php?id=<?php echo $art['id']; ?>">Editar</a>
                                                        <a class="btn btn-danger" href="excluirArtigo.php?id=<?php echo $art['id']; ?>">Excluir</a>
                                                </nav>
                                        </td>
                                </tr>
                        <?php endforeach ?>
                </tbody>
        </table>

</div>

<?php
require_once("../../templates/footer.php");
?>