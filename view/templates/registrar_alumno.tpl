<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <title>:: REGISTRAR ALUMNO ::</title>
    </head>
    <body>
        <div class="registro" style="padding: 4%">
            <div class="tile-header">
                <img src="./images/logo1.png" height="18%" width="18%" style="margin-left: auto; margin-right: auto; display: block;"/>
                <h4 class="text-center">REGISTRAR NUEVO ALUMNO DEL CENTRO EDUCATIVO</h4><hr/>
            </div>
            <div class="tile-body" style="margin-top: 3%;">
                <form id="form" action="index.php" method="POST">
                    <label class="form-input">
                        <input type="text" name="user" autofocus="true" style="text-align: center;" required />
                        <span class="label">USUARIO</span>
                        <span class="underline"></span>
                    </label>
                    <label class="form-input">
                        <input type="password" name="pass" style="text-align: center;" required/>
                        <span class="label">CONTRASEÑA</span>
                        <div class="underline"></div>
                    </label>
                    <label class="form-input">
                        <input type="text" name="nombre" style="text-align: center;" required/>
                        <span class="label">NOMBRE COMPLETO</span>
                        <div class="underline"></div>
                    </label>
                    <label class="form-input">
                        <input type="text" name="dni" style="text-align: center;" required/>
                        <span class="label">DOCUMENTO NACIONAL DE IDENTIDAD</span>
                        <div class="underline"></div>
                    </label>
                    <label class="form-input">
                        <input type="email" name="email" style="text-align: center;" required/>
                        <span class="label">CORREO ELÉCTRONICO</span>
                        <div class="underline"></div>
                    </label>
                    <label class="form-input">
                        <input type="tel" name="tel" style="text-align: center;" required/>
                        <span class="label">TELÉFONO DE CONTACTO</span>
                        <div class="underline"></div>
                    </label>
                    <label class="form-input text-center">
                        <span class="select">CICLO FORMATIVO</span>
                        <select name="ciclos" class="form-control selectpicker" required>
                            <option value=" ">Por favor, seleccione el ciclo formativo al que pertenece</option>
                            {foreach $ciclos as $ciclo}
                                <option>{$ciclo->getNombre()}</option>
                            {/foreach}
                        </select>
                    </label>
                    <label class="form-input text-center">
                        <span class="select">TUTOR DEL CENTRO EDUCATIVO</span>
                        <select name="tutores" class="form-control" required>
                            <option value=" ">Por favor, seleccione su tutor del centro educativo</option>
                            {foreach $tutores as $tutor}
                                <option>{$tutor->getNombre()}</option>
                            {/foreach}
                        </select>
                    </label>
                    <label>
                        <div style="margin-top: 1%;">
                            <input type="checkbox" name="terminos" value="términos_y_condiciones" required/><span style="font-size: 12px;"> Acepto los términos y condiciones del registro en la base de datos del CPIFP Los Enlaces</span>
                        </div>
                    </label>
                    <div class="submit-container clearfix" style="text-align: center; margin-top: 1%;">  
                        <input type="reset" style="margin-top: 1%; display: inline-block; width: 250px;" name="clear" value="LIMPIAR FORMULARIO" class="btn btn-warning"/>
                        <input type="submit" style="margin-top: 1%; display: inline-block; width: 250px;" name="add_alumno" value="REGISTRAR NUEVO ALUMNO" class="btn btn-success"/>
                    </div>
                </form>
                <span class="label">USUARIO</span>
                {if isset($msj_error)}
                    <!--En el caso de que el usuario introducido NO exista en la base de datos-->
                    <span class="label" style="margin-top: 2%; color: red;"><span class="glyphicon glyphicon-remove"></span> {$msj_error}</span>
                    <div class="underline"></div>
                {/if}
            </div>
        </div>
    </body>
</html>