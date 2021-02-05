<?php

class Validar
{
    private $username;
    private $password;
    private $error;
    private $code;

    public function validarCampos()

    {
        if (isset($_POST['btn-signup'])) {
            $this->username = trim($_POST['username']);
            $this->password = trim($_POST['password']);
            
            $userDB = 'elelog@elelog.es';

            $paswordDBEncriptado = md5('12345');
            $passwordGIEncriptado = md5($this->password);

            if (empty($this->username)) {
                $this->error = "ingrese su usuario, debe ser un email!";
                $this->code = 1;
            } else if ($this->username != $userDB) {
                $this->error = "Usuario no encontrado";
                $this->code = 1;
            } else if (empty($this->password)) {
                $this->error = "Ingrese una contraseña!";
                $this->code = 2;
            } else if ($passwordGIEncriptado != $paswordDBEncriptado) {
                $this->error = "La contraseña es icorrecta";
                $this->code = 2;
            } else {
?>
                <script>
                    alert('Bienvenido');
                    document.location.href = 'index.php';
                </script>
            <?php
            }
        }
    
    }



    public  function mensajeError()
    {
        if (isset($this->error)) {
            echo  $this->error;
        }
    }

    public function resetUsuario()
    {
        if (isset($this->username)) {
            echo  $this->username;
        }
    }

    public function validarUsuario()
    {
        if (isset($this->code) &&  $this->code == 1) {
            echo "autofocus";
        }
    }

    public function remarcarInput()
    {
        if (isset($this->error)) {
            ?>
            <style type="text/css">
                input:focus {
                    border: solid red 1px;
                }
            </style>
<?php
        }
    }

    public function validarPassword()
    {
        if (isset($this->code) &&  $this->code == 2) {
            echo "autofocus";
        }
    }
}
?>