<?php
include '../config/Autentication.php';
include '../config/connection.php';

$sql = "SELECT * FROM Topics ORDER BY id DESC";
$result = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="shortcut icon" href="../images/veddit-logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="../timeline/style/style.css" rel="stylesheet">
    <title>Feed</title>
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <div class="row">
                <a href="../index.php" id="sem-sublinhado">
                    <span id="title" class="navbar-brand"><img src="../images/veddit-logo.png" alt="VEDDIT" id="logo"><b>VEDDIT</b></span>
                </a>
            </div>
            <div class="flex-end">
                <a type="button" id="logout" class="btn" href="../config/Logout.php" alt="Sair"><i class="bi bi-x-square-fill"></i> <b>Logout</b></a>
            </div>
        </div>
    </nav>
    <div class="container p-3 mb-2 bg-light text-dark" id="panel">
        <img src="../images/veddit-logo.png" id="logo-login-panel" alt="VEDDIT">
        <h1>Feed</h1>
        <br>
        <div>
            <form action="../timeline/topics/create_topic.php" METHOD="GET">
                <div class="row" style="text-align:center">
                        <input type="text" name="title" class="col-9" placeholder="Crie um tópico" required>
                    <div class="col-3">
                        <input type="submit" class="btn col-12" id="button" value="Publicar">
                    </div>
                </div>
            </form>
        </div>
        <br>
        <?php if (isset($_GET["msg"])) { ?>
            <div style="text-align:center;">
                <p><?php echo $_GET['msg'] ?></p>
            </div>
        <?php } ?>

        <div id="feed">
            <?php
                if ($result) {
            ?>
                <form action="/timeline/topics/open_topic.php" METHOD="GET">
                <?php
                    $num = mysqli_num_rows($result);
                    if($num == 0) {
                        echo "<p style='text-align:center;'>Não existem tópicos disponíveis. </p>";
                    }
                    for ($i = 1; $i <= $num; $i++) {
                        $dados = mysqli_fetch_array($result);
                ?>
                        <div id="topic" class="p-2 mb-1 bg-light text-dark">
                            <a href="../timeline/topics/open_topic.php?idTopic=<?php echo $dados['id'] ?>" id="sem-sublinhado" >
                                <p  id="titleTopic">
                                    <?php echo $dados['title'] ?>
                                </p>
                            </a>                                
                        </div>
                <?php
                    }
                ?>
                </form>
            <?php
                }
            ?>
        </div>
    </div>
    <footer><b>Veddit</b> &copy Todos os direitos reservados 2022</footer>
</body>

</html>