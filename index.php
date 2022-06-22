<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Home</title>
    <style>
        #logo {
            width: 70px;
            height: 80px;
        }
        #login-panel {
            width: 100px;
            height: 110px;
            display: block;
            margin: 0px auto;
        }
        #title {
            color:coral;
        }
        #panel {
            padding: 60px 60px 60px 60px;
            background-color: lightgrey;
            margin-top: 30px;
            border-radius: 10px;
        }
        h1 {
            text-align:center;
        }
        #button {
            background-color:coral;
            display:block;
        }
        #sem-sublinhado {
            text-decoration: none;
        }
        footer {
            text-align:center;
            color:coral;
            font-size: small;
        }
    </style>
</head>
<body>
        <nav class="navbar bg-light">
            <div class="container-fluid">
                <a href="index.php" id="sem-sublinhado">
                    <span id="title" class="navbar-brand"><img src="images/veddit-logo.png" alt="VEDDIT" id="logo">VEDDIT</span>
                </a>
            </div>
        </nav>

        <div class="container" id="panel">
            <img src="images/veddit-logo.png" id="login-panel" alt="VEDDIT">

            <h1>Bem-vindo ao Veddit</h1>
            <br>
            <div>
                <a type="button" id="button" class="btn" href="login/login.php">Logar</a>
            </div>
            <br>
            <div >
                <a type="button" id="button" class="btn" href="register/register.php">Cadastrar</a>
            </div>
        </div>

        <div class="container">
            <footer><b>Veddit</b> &copy Todos os direitos reservados 2022</footer>
        </div>
        
</body>
</html>
