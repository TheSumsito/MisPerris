<!-- Login -->
<?php 
    include_once '../Complementos/ComprobarSession.php';  
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/lity.css">
    <link rel="stylesheet" href="../css/Aspectos.css">
    <link rel="shortcut icon" href="../img/Otras/logo_perris.png" />
    <title>Formulario</title>
</head>

<body>
    <!-- JavaScript BootStrap-->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/lity.js"></script>

    <!-- JQuery Validate -->
    <script src="../js/JQuery/jquery.js"></script>
    <script src="../js/JQuery/jquery.validate.js"></script>

    <!-- Validaciones Formulario -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#Formulario").validate({
                rules: {
                    txtCorreo: {
                        required: true,
                        email: true
                    },
                    txtRun: {
                        required: true,
                        minlength: 11
                    },
                    txtNombre: {
                        required: true,
                        maxlength: 45
                    },
                    txtTelefono: {
                        required: true,
                        maxlength: 9
                    }
                },
                messages: {
                    txtCorreo: {
                        required: "Porfavor, Ingrese su Correo Electronico",
                        email: "Su Correo Electronico es Invalido, Porfavor Ingrese Correo Valido"
                    },
                    txtRun: {
                        required: "Porfavor, Ingrese su Run",
                        minlength: "Su Run de tener como Minimo 11 Caracteres"
                    },
                    txtNombre: {
                        required: "Porfavor, Ingrese Su Nombre",
                        maxlength: "Su Nombre de tener como Minimo 45 Caracteres"
                    },
                    txtTelefono: {
                        required: "Porfavor, Ingrese Algun Numero de Contacto",
                        maxlength: "Su Telefono de tener como Minimo 9 Digitos"
                    }
                },
                errorElement: "em",
                errorPlacement: function(error, element) {
                    // Add the `help-block` class to the error element
                    error.addClass("help-block");

                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.parent("label"));
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).parents(".col-sm-5").addClass("has-error").removeClass("has-success");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).parents(".col-sm-5").addClass("has-success").removeClass("has-error");
                }
            });
        });
    </script>
    <!-- Barra de Menu  -->
    
    <?php include_once('../Complementos/Menu.php'); ?>

    <form action="../Procesos/Registrar.php" method="POST" id="Formulario" autocomplete="off">
        <div id="login">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="../Procesos/Registrar.php" method="post">
                                <hr>
                                <h3 class="text-center">Formulario de Registro</h3>
                                <hr>
                                <div class="form-group">
                                    <label for="Correo">Correo Electronico:</label><br>
                                    <input type="text" name="txtCorreo" id="txtCorreo" class="form-control" placeholder="Ej: Ejemplo@Dominio.com">
                                </div>
                                <div class="form-group">
                                    <label for="Run">Run:</label><br>
                                    <input type="text" name="txtRun" id="txtRun" class="form-control" placeholder="Ej: 11.111.111-1">
                                </div>
                                <div class="form-group">
                                    <label for="Nombre">Nombre Completo:</label><br>
                                    <input type="text" name="txtNombre" id="txtNombre" class="form-control" placeholder="Ej: Apolo Ducke">
                                </div>
                                <div class="form-group">
                                    <label for="FechaNaci">Fecha de Nacimiento:</label><br>
                                    <input type="date" name="dtFecha" id="dtFecha" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Telefono">Telefono:</label><br>
                                    <input type="text" name="txtTelefono" id="txtTelefono" class="form-control" placeholder="Ej: 947261827">
                                </div>
                                <div class="form-group">
                                    <label for="Region">Region:</label><br>
                                    <select class="form-control" id="cboRegion" name="cboRegion">
                                        <?php
                                            $Cone= mysqli_connect("localhost", "root", "", "misperris");
                                            $region="select * from region";
                                            $reg= mysqli_query($Cone, $region);
                                            
                                            while ($row = mysqli_fetch_array($reg)) {
                                                echo '<option value='.$row[0].'>'.$row[1].'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Ciudad">Ciudad:</label><br>
                                    <select class="form-control" id="cboCiudad" name="cboCiudad">
                                        <?php         
                                            $Cone= mysqli_connect("localhost", "root", "", "misperris");
                                            $comuna="select * from ciudad";
                                            $comu= mysqli_query($Cone, $comuna); 

                                            while ($row = mysqli_fetch_array($comu)) {
                                                echo '<option value='.$row[0].'>'.$row[1].'</option>';
                                            }

                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="TipoVivienda">Tipo de Vivienda:</label><br>
                                    <select name="cboTipoVivienda" id="cboTipoVivienda" class="form-control">
                                        <option value="C_Patio_Gr">Casa con Patio Grande</option>
                                        <option value="C_Patio_Pe">Casa con Patio Pequeño</option>
                                        <option value="C_Sin_Pat">Casa sin Patio</option>
                                        <option value="Departamento">Departamento</option>
                                    </select>
                                </div>
                                <hr>
                                <div class="form-group" method="post" action="../Vistas/contactanos.php">
                                    <input type="submit" name="btnIngresar" class="btn btn-info btn-md" value="Ingresar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html