<!-- Panel central -->
<div class="w3-content" style="background-color:white; height: 100%; ">
    <div class="w3-row w3-padding w3-border">
        <div class="w3-col l12 s12">
            <div class="w3-container w3-white w3-margin w3-padding-large">
                <div class="select-boxes">
                    <h2 class="text-center" style="margin-top: 6%;">SOLICITUDES PARA EL TUTOR {$user|upper}</h2><hr/>
                    <div class="container">                                     
                        <div class="col-lg-9">
                            <div id="cuadro" style="text-align:center;">
                                <table id="tabla" class="display centerTable" cellspacing="0" width="130%">
                                    <thead>
                                        <tr>
                                            <th>Empresa</th>
                                            <th>Ciclo formativo</th>
                                            <th>Nº alumnos</th>
                                            <th>Fecha</th>
                                            <th>Actividad</th>
                                            <th>Observaciones</th>
                                            <th>Proyecto</th>
                                        </tr>
                                    </thead>
                                    {foreach $solicitudes as $solicitud}
                                        {foreach $tutor_ciclos as $value}
                                            {if $value eq $solicitud->getId_ciclo()}
                                                <tr>
                                                    <th>
                                                        {foreach $empresas as $empresa}
                                                            {if $empresa->getId_empresa() eq $solicitud->getId_empresa()}
                                                                {$empresa->getNombre()}
                                                            {/if}
                                                        {/foreach}
                                                    </th>
                                                    <th>
                                                        {foreach $ciclos as $ciclo}
                                                            {if $solicitud->getId_ciclo() eq $ciclo->getId_ciclo()}
                                                                {$ciclo->getNombre()}
                                                            {/if}
                                                        {/foreach}
                                                    </th>
                                                    <th>{$solicitud->getCantidad_alumnos()}</th>
                                                    <th>{$solicitud->getFecha_creacion()}</th>
                                                    <th>{$solicitud->getActividad()}</th>
                                                    <th>{$solicitud->getObservaciones()}</th>
                                                    <th>{if $solicitud->getProyecto() == 0}<input type="checkbox" disabled/>{else}<input type="checkbox" checked disabled/>{/if}</th>
                                                </tr>
                                            {/if}
                                        {/foreach}
                                    {/foreach}
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Panel central -->