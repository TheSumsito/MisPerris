<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/Aspectos.css">
    <title>login</title>
</head>

<body class="body">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/JQuery/jquery.js"></script>
    <script src="../js/JQuery/jquery.validate.js"></script>

    <form action="../Procesos/Validar.php" method="POST">
        <div id="login">
            <h3 class="text-center text-white pt-5"></h3>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="" method="post">
                                <h3 class="text-center">Iniciar Session</h3>
                                <div class="form-group">
                                    <label for="username">Username:</label><br>
                                    <input type="text" name="txtUser" id="txtUser" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password:</label><br>
                                    <input type="password" name="txtPass" id="txtPass" class="form-control">
                                </div>
                                <div class="form-group" method="post" action="../Procesos/Validar.php">
                                    <input type="submit" name="Ingresar" class="btn btn-info btn-md" value="Ingresar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>

</body>

</html>