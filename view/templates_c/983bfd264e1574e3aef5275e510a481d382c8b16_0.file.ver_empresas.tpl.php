<?php
/* Smarty version 3.1.32, created on 2018-05-27 13:28:12
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\alumnos\ver_empresas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0a964cac38e5_03989287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '983bfd264e1574e3aef5275e510a481d382c8b16' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\alumnos\\ver_empresas.tpl',
      1 => 1527202660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0a964cac38e5_03989287 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Panel central -->
<div class="w3-content" style="background-color:white;">
    <div class="w3-row w3-padding w3-border">
        <div class="w3-col l12 s12">
            <div class="w3-container w3-white w3-margin w3-padding-large">
                <div class="select-boxes">
                    <div class="container">
                        <div class="col-lg-9">
                            <br /><br />
                            <form class="form-horizontal" action=" " method="POST"  id="reg_form">
                                <fieldset>
                                    <legend class="text-center"> Ver empresas</legend>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Nombre completo</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input  name="first_name" placeholder="Nombre y apellidos" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Teléfono de contacto</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                                <input name="phone" placeholder="Introduce el teléfono (9 dígitos numéricos)" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Dirección física</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                                <input name="address" placeholder="Dirección física" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Ciudad</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                                <input name="city" placeholder="Ciudad" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Estado</label>
                                        <div class="col-md-6 selectContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                                <select name="state" class="form-control selectpicker">
                                                    <option value=" " >Por favor, selecciona un elemento</option>
                                                    <option>Alabama</option>
                                                    <option>Alaska</option>
                                                    <option >Arizona</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Observaciones </label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                <textarea class="form-control" name="comment" placeholder="Escriba aquí observaciones ... "></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <legend> Información de registro</legend>
                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Correo Eléctronico</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                <input name="email" placeholder="Dirección de Correo Electrónico" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="password"  class="col-md-4 control-label">
                                            Contraseña de Acceso
                                        </label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                                <input class="form-control" id="userPw" type="password" placeholder="password" 
                                                       name="password" data-minLength="5"
                                                       data-error="some error"
                                                       required/>
                                                <span class="glyphicon form-control-feedback"></span>
                                                <span class="help-block with-errors"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="confirmPassword"  class="col-md-4 control-label">
                                            Confirma Contraseña
                                        </label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                                <input class="form-control <?php echo $_smarty_tpl->tpl_vars['borderColor']->value;?>
" id="userPw2" type="password" placeholder="Confirm password" 
                                                       name="confirmPassword" data-match="#confirmPassword" data-minLength="5"
                                                       data-match-error="some error 2"
                                                       required/>
                                                <span class="glyphicon form-control-feedback"></span>
                                                <span class="help-block with-errors"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label"></label>
                                        <div class="col-md-4">
                                            <button type="submit" class="btn btn-warning" >Enviar <span class="glyphicon glyphicon-send"></span></button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Panel central --><?php }
}
