<?php
/* Smarty version 3.1.32, created on 2018-06-06 00:26:06
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\baja_perfil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b170dfe963591_43443047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7797212952dde3ac7dad48b4a893efd7b67fdb60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\baja_perfil.tpl',
      1 => 1528237564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b170dfe963591_43443047 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Panel central -->
<div class="w3-content" style="background-color:white; height: 100%; ">
    <div class="w3-row w3-padding w3-border">
        <div class="w3-col l12 s12">
            <div class="w3-container w3-white w3-margin w3-padding-large">
                <div class="select-boxes">
                    <div class="container">
                        <div class="col-lg-9">
                            <br /><br />
                            <form class="form-horizontal" action="panel_administracion.php" method="POST"  id="reg_form">
                                <fieldset>
                                    <legend class="text-center"> BAJA PERFIL CON ROL <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['rol']->value, 'UTF-8');?>
</legend>
                                    <div class="form-group has-feedback">
                                        <label for="password"  class="col-md-4 control-label">Contraseña</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                <input class="form-control" id="userPw" type="password" placeholder="Introduzca su contraseña" 
                                                       name="password" data-minLength="5" data-error="some error" required/>
                                                <span class="glyphicon form-control-feedback"></span>
                                                <span class="help-block with-errors"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="confirmPassword"  class="col-md-4 control-label">Confirmar Contraseña</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                <input class="form-control <?php echo $_smarty_tpl->tpl_vars['borderColor']->value;?>
" id="userPw2" type="password" placeholder="Repita su contraseña" 
                                                       name="confirmPassword" data-match="#confirmPassword" data-minLength="5" data-match-error="some error 2" required/>
                                                <span class="glyphicon form-control-feedback"></span>
                                                <span class="help-block with-errors"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin: 3%;">
                                        <div class="col-lg-12">
                                            <div class="alert alert-info alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                <i class="fa fa-info-circle"></i> <strong><?php if ($_smarty_tpl->tpl_vars['rol']->value == 'empresa') {?>Se eliminarán las solicitudes de alumnos realizadas por esta empresa que estén registradas en la base de datos.<?php } else { ?>Se eliminarán todas las solicitudes y ciclos que estén tutorizados por <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
.<?php }?></span></strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <label class="col-md-4 control-label"></label>
                                        <div class="col-md-4">                                            
                                            <button type="submit" name="baja" class="btn btn-danger" style="margin-top: 1%; display: inline-block; width: 300px;"><span class="glyphicon glyphicon-send"></span> CONFIRMAR BAJA DEL PERFIL</button>
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
