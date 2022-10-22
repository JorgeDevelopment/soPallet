<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/principal.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
</head>
<body>
    <header>
        <h1 class="logo"><a href="index.php">SoPallet</a></h1>
        <nav>
            <ul>
                <li><a href="index.php">Principal</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#">Perfil</a></li>
                <li><a href="#footer">Contacto</a></li>
            </ul>
        </nav>
     
    </header>
<div class="container">
        <h2>Fazer login</h2>
        <form action="conexao.php" id="formlogin" method="post">
                <?php if (isset($resultado) && $resultado["cod"] == 0): ?>
                    <div class="alert alert-danger">
                        <?php echo $resultado["msg"];?> 
                    </div>
                <?php endif ;?>
                <div class="">
                    <label for="">Usuario:</label><br>
                    <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com"><br>
                    
                    <label for="">Password:</label>
                    <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Password">
                    
                </div>
                <small>*It won't be shared with anyone else</small><br><br>
                <input class="btn btn-primary" type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>