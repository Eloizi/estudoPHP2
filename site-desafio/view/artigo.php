<?php
require_once("../templates/links.php");
require_once("../src/config.php");
require_once("../src/Artigo.php");


$obj_artigo = new Artigo($mysql);
$artigo = $obj_artigo->encontrarPorId($_GET['id']);

?>

</head>

<body class="header-body">
  <!-- Puxando a estilização da página -->
  <header>
    <link rel="stylesheet" href="../css/style.css">
  </header>


  <main class="container-artigo">
    <br>
    <h1>
      <?php echo $artigo['titulo']; ?>
    </h1>

    </br>

    <p>
      <?php echo nl2br($artigo['conteudo']); ?>
    </p>
    </br>

  </main>
  </br>
  </br>
  <a class="btn btn-secondary" href="../index.php">Voltar</a>



  <?php
  require_once("../templates/footer.php");
  ?>