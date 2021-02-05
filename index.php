<!DOCTYPE html>
<html lang="en">

<?php
require_once "validacion.php";
$validar = new Validar();
$validar->validarCampos();
$validar->remarcarInput();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
    <div class="container-fluid">
        <div class="row main bg-success text-center">
            <div class="head">
                <h2>
                    Iniciar Sesión
                </h2>
                <div class="error">
                    <?php
                    $validar->mensajeError();
                    ?>
                </div>
            </div>
            <div class="col-md-12 col-xs-12 col-sm-12 login_form">
                <div class="container-fluid">
                    <div class="row">
                        <form control="" class="form-group" method="post">
                            <div class="row">
                                <input type="text" name="username" id="username" class="form__input" placeholder="Usuario" value="<?php $validar->resetUsuario();?>"
                                <?php
                                $validar->validarUsuario();
                                ?>
                                />
                            </div>
                            <div class="row">
                                <input type="password" name="password" id="password" class="form__input" placeholder="Contraseña"
                                <?php
                                $validar->validarPassword();
                                ?> />
                            </div>
                            <div class="row">
                                <input type="submit" value="Ingresar" class="btn" name="btn-signup">
                                </input>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>