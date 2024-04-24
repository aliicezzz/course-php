<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/exercise.css">
    <title>Exercício</title>
</head>

<body class="exercise">
    <header class="header">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navigation">
        <a href=<?= "../{$_GET['dir']}/{$_GET['file']}.php" ?> class="green">Sem formatação</a>
        <a href="index.php" class="red">Voltar</a>
    </nav>
    <main class="main">
        <div class="content">
            <?php
            include((dirname(__DIR__)) . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="footer">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>

</html>