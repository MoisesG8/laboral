<!DOCTYPE html>
<html lang="es">

<?php
session_start();

if (!isset($_SESSION['USUARIO_LOGUEADO'])){

    echo'<script type="text/javascript">  alert("usted no está logueado"); window.location.href="index.html";   </script>';
}

$USUARIO = $_SESSION['LOGIN'];
$NOMBRE = $_SESSION['NOMBRE'];

?>

<head>
    <title>Ingreso de Información</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
<body>

<div class="contact1">
    <div class="container">


        <div class="head">

        </div>
        <div class="contact1-pic js-tilt" data-tilt>
            <img src="../images/logo.png" alt="IMG">
        </div>

        <span class="contact1-form-title">
					Solicitud de empleo
				</span>


        <!-- contact1-form   -->
        <form class="form-horizontal validate-form" action="registra.php"  method="post">

				<span class="contact1-form-title">
					Datos de la solicitud
				</span>


            <div class="wrap-input1 validate-input">
                <input class="input1" type="text" name="LOGIN" value=" <?php echo $_SESSION['LOGIN']; ?>" readonly>
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" >
                <input class="input1" type="text" name="NOMBRECOMPLETO" value=" <?php echo $_SESSION['NOMBRE']; ?>" readonly>
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate = "Las Placas son requeridas">
                <input class="input1" type="text" name="MOTIVO" placeholder="Motivo Solicitud de Empleo">
                <span class="shadow-input1"></span>
            </div>


            <span class="contact1-form-title">
					Datos del Empleado
				</span>


            <div class="container-contact1-form-btn">
                <input type="hidden" name="MAX_FILE_SIZE" value="9000000" />
                <h5 class="bg-white">Seleccione el archivo que da vida a la solicitud, (formato PDF).</h5>
                <input name="userfile" type="file" class="form-control" />

                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-8">
                        <input type="submit" value="Enviar Archivo" class="btn bg-white"/>
                    </div>

                </div>
            </div>
        </form>

    </div>
</div>



</body>
</html>
