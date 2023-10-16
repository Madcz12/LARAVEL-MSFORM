<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CVG - Proyectos Especiales</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
        integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        .form-section {
            display: none;
        }

        .form-section.current {
            display: inline;
        }

        .parsley-errors-list {
            color: red;
        }
    </style>

    <style>
        .nav-link {
            color: #fff;
            font-weight: bold;
        }

        .nav-link.active {
            background-color: #000080;
        }
    </style>

</head>

<body>
    <div class="container-fluid  ">
        <div class="row justify-content-md-center">
            <div class="card-header bg-primary text-white d-flex justify-content-center w-100">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Sector</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Administradores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Permisos</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 " style="margin-top: -3rem;">
                <div class="card px-5 py-3 mt-5 shadow" style="margin-top: -2rem;">
                    <h1 class="text-danger text-center mt-3 mb-4">Proyectos Especiales CVG</h1>

                    <div class="nav nav-fill my-2">
                        <label class="nav-link shadow-sm step0    border ml-2 ">Inicio</label>
                        <label class="nav-link shadow-sm step1   border ml-2 ">Analisis de Opciones</label>
                        <label class="nav-link shadow-sm step2   border ml-2 ">Definición</label>
                        <label class="nav-link shadow-sm step3   border ml-2 ">Ejecucion</label>
                        <label class="nav-link shadow-sm step4   border ml-2 ">Cierre</label>
                    </div>

                    <form action="/post" method="post" class="employee-form">
                        @csrf
                        <div class="form-section"> {{-- fase 1 --}}
                            <label for="" style="font-weight: bold">Nombre del Proyecto:</label>
                            <input type="text" class="form-control mb-3" name="nombre_proyecto"
                                {{-- required --}}>
                            <label for="" style="font-weight: bold">Sector:</label>
                            <input type="text" class="form-control mb-3" name="sector" {{-- required --}}>
                            <label for="" style="font-weight: bold">Empresa:</label>
                            <input type="text" class="form-control mb-3" name="empresa" {{-- required --}}>
                            <label for="" style="font-weight: bold">Objetivo del Proyecto:</label>
                            <textarea name="objetivo" class="form-control mb-3" id="objetivo" cols="10" rows="3" {{-- required --}}></textarea>
                            <label for="" style="font-weight: bold">Alcance del Proyecto:</label>
                            <textarea name="alcance" class="form-control mb-3" id="alcance" cols="10" rows="3" {{-- required --}}></textarea>
                            <label for="" style="font-weight: bold">Estudio:</label>
                            <select name="estudio" id="estudio" class="form-control">
                                <option value="opt" disabled>Estudios de Ingenieria: </option>
                                <option value="ingenieria conceptual" {{-- required --}}>Ingenieria Conceptual
                                </option>
                                <option value="ingenieria basica" {{-- required --}}>Ingenieria Básica</option>
                                <option value="ingenieria de detalle" {{-- required --}}>Ingenieria de Detalle
                                </option>
                            </select>
                            <br>
                            <label for="" style="font-weight: bold">Monto Inicial:</label>
                            <input type="number" min="0" class="form-control mb-3" {{-- required --}} />
                            <br>
                            <label for="" style="font-weight: bold">Nudos Criticos:</label>
                            <textarea name="nudos_criticos" class="form-control mb-3" id="nudos_criticos" cols="10" rows="3"
                                {{-- required --}}></textarea>
                        </div>
                        <div class="form-section"> {{-- fase 2 --}}
                            <label for="" style="font-weight: bold">Designacion del Gerente:</label>
                            <input type="text" class="form-control mb-3" name="gerente" {{-- required --}}>
                            <label for="" style="font-weight: bold">Tecnologia:</label>
                            <input type="text" class="form-control mb-3" name="tecnologia" {{-- required --}}>
                            <label for="" style="font-weight: bold">Ubicacion:</label>
                            <input type="text" class="form-control mb-3" name="ubi_tech" {{-- required --}}>
                            <br>
                            <label for="" style="font-weight: bold">Monto Inicial:</label>
                            <input type="number" min="0" class="form-control mb-3" {{-- required --}} />
                            <label for="" style="font-weight: bold">Cronograma:</label>
                            <input type="text" class="form-control mb-3" name="cronograma" {{-- required --}}>
                            <label for="alcance_preliminar" style="font-weight: bold">Tiene alcance
                                preliminar?</label>
                            <input type="checkbox" name="pl_ejec_preliminar" id="pl_ejec_preliminar"
                                style="height: 1rem; width: 1rem; float: left;" />
                            <br>
                            <label for="" style="font-weight: bold">Permisologia:</label>
                            <select name="permisos" id="permisos" class="form-control">
                                <option value="opt" disabled>Escoja un permiso: </option>
                                <option value="municipal" {{-- required --}}>Municipal</option>
                                <option value="ambiental" {{-- required --}}>Ambiental</option>
                                <option value="Social" {{-- required --}}>Social</option>
                                <option value="Laboral" {{-- required --}}>Laboral</option>
                            </select>
                            <br>
                            <label for="alcance_preliminar" style="font-weight: bold">Gestión de Adquisición a Largo
                                Plazo: </label>
                            <input type="checkbox" name="gestion_adquisicion_lp" id="gestion_adquisicion_lp"
                                style="height: 1rem; width: 1rem; float: left;" />
                            <br>
                            <label for="" style="font-weight: bold">Base del Proyecto:</label>
                            <input type="text" class="form-control mb-3" name="base" {{-- required --}}>
                            <label for="" style="font-weight: bold">Plan del Proyecto:</label>
                            <input type="text" class="form-control mb-3" name="plan" {{-- required --}}>
                            <label for="" style="font-weight: bold">Recomendaciones:</label>
                            <textarea name="recomendaciones" class="form-control mb-3" id="recomendaciones" cols="10" rows="3"
                                {{-- required --}}></textarea>
                            <label for="" style="font-weight: bold">Tipo de Financiamiento:</label>
                            <select name="tipo_financiamiento" id="tipo_financiamiento" class="form-control">
                                <option value="opt" disabled>Escoja un financiamiento: </option>
                                <option value="interno" {{-- required --}}>Interno</option>
                                <option value="externo" {{-- required --}}>Externo</option>
                            </select>
                        </div>
                        <div class="form-section"> {{-- Fase 3 --}}
                            <input type="checkbox" name="acc_alcance" id="acc_alcance"
                                style="height: 1rem; width: 1rem; display: inline-block; margin-right: 0.5rem;" />
                            <label for="precision_alcance" style="font-weight: bold">Precisión de alcance</label>

                            <input type="checkbox" name="acc_sitio_ejecucion" id="acc_sitio_ejecucion"
                                style="height: 1rem; width: 1rem; display: inline-block; margin-right: 0.5rem;" />
                            <label for="precision_sitio_ejecucion" style="font-weight: bold">Precisión de sitio de
                                ejecución</label>

                            <input type="checkbox" name="acc_interrelaciones" id="acc_interrelaciones"
                                style="height: 1rem; width: 1rem; display: inline-block; margin-right: 0.5rem;" />
                            <label for="precision_interrelaciones" style="font-weight: bold">Precisión de
                                interrelaciones</label>

                            <input type="checkbox" name="obt_permisos" id="obt_permisos"
                                style="height: 1rem; width: 1rem; display: inline-block; margin-right: 0.5rem;" />
                            <label for="obtencion_permisologia" style="font-weight: bold">Obtención de
                                permisología</label>
                            <br>
                            <label for="" style="font-weight: bold">Aseguramiento de Tecnología o
                                Proveedor:</label>
                            <input type="text" class="form-control mb-3" name="aseguramiento_tec"
                                {{-- required --}}>
                            <label for="" style="font-weight: bold">Conclusion de Diseño Básico:</label>
                            <textarea name="diseno_basico" class="form-control mb-3" id="diseno_basico" cols="10" rows="3"
                                {{-- required --}}></textarea>
                        </div>
                        <div class="form-section"> {{-- Fase 4 --}}
                            <input type="checkbox" name="contratacion" id="contratacion"
                                style="height: 1rem; width: 1rem; display: inline-block; margin-right: 0.5rem;" />
                            <label for="precision_alcance" style="font-weight: bold">Proceso de Contratación</label>
                            <h1 style="font-size: 1.2rem;">Avance de Ejecución</h1>
                            <input type="text" name="procura" id="procura" placeholder="Procura"
                                class="form-control mb-3" />
                            <input type="text" name="construccion" id="construccion" placeholder="Construcción"
                                class="form-control mb-3" />
                            <h1 style="font-size: 1.2em;">Avance Financiero</h1>
                            <input type="number" min="0" class="form-control mb-3" {{-- required --}}
                                placeholder="Porcentaje de Informacion" name="avance_financiero"
                                id="avance_financiero" />
                            <h1 style="font-size: 1.2rem;">Avance de Documentación</h1>
                            <input type="number" min="0" class="form-control mb-3" {{-- required --}}
                                placeholder="Porcentaje de Manuales" name="avance_doc" id="avance_doc" />
                            <input type="number" min="0" class="form-control mb-3"
                                placeholder="Planos Asi Construidos"{{-- required --}} name="planos_construidos"
                                id="planos_construidos" />
                            <h1 style="font-size: 1.2em;">Pruebas</h1>
                            <input type="number" min="0" class="form-control mb-3" {{-- required --}}
                                placeholder="Equipos en Vacio" name="equipos_vacio" id="equipos_vacio" />
                            <input type="number" min="0" class="form-control mb-3"
                                placeholder="Pruebas de Arranque"{{-- required --}} name="pruebas_arranque"
                                id="pruebas_arranque" />
                            <br>
                            <label for="precision_alcance" style="font-weight: bold">Entrenamiento de Personal</label>
                            <input type="checkbox" name="training_personal" id="training_personal"
                                style="height: 1rem; width: 1rem; display: inline-block; margin-right: 0.2rem;" />
                            <input type="text" name="pruebas_garantia" id="pruebas_garantia"
                                placeholder="Pruebas de Garantia" class="form-control mb-3" />
                            <input type="text" name="acep_provisional" id="acep_provisional"
                                placeholder="Aceptacion Provisional" class="form-control mb-3" />
                        </div>
                        <div class="form-section"> {{-- Fase 5 --}}
                            <h1 style="font-size: 1.2rem;">Pruebas de Aceptación Final</h1>
                            <input type="number" min="0" class="form-control mb-3" {{-- required --}}
                                placeholder="Cuantos Manuales de Operacion fueron Usados?" name="manuales_op"
                                id="manuales_op" />
                            <input type="number" min="0" class="form-control mb-3"
                                placeholder="Cuantos Manuales de Mantenimiento fueron Usados?"{{-- required --}}
                                name="manuales_mant" id="manuales_mant" />
                            <input type="text" name="acep_final" id="acep_final" placeholder="Aceptacion Final"
                                class="form-control mb-3" />
                            <input type="checkbox" name="cierre_contrato" id="cierre_contrato"
                                style="height: 1rem; width: 1rem; display: inline-block; margin-right: 0.5rem;" />
                            <label for="cierre_contrato" style="font-weight: bold">Cierre de Contratos</label>
                            <input type="text" name="transfer_actives" id="transfer_actives"
                                placeholder="Transferencia de los Activos" class="form-control mb-3" />
                            <input type="text" name="transfer_warrants" id="transfer_warrants"
                                placeholder="Transferencia de Garantias" class="form-control mb-3" />
                        </div>
                        <div class="form-navigation mt-5">
                            <button type="button" class="previous btn btn-primary float-left">&lt; Atrás</button>
                            <button type="button" class="next btn btn-primary float-right">Siguiente &gt;</button>
                            <button type="submit" class="btn btn-success float-right">Enviar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script>
        $(function() {
            var $sections = $('.form-section');

            function navigateTo(index) {
                $sections.removeClass('current').eq(index).addClass('current');

                $('.form-navigation .previous').toggle(index > 0);
                var atTheEnd = index >= $sections.length - 1;
                $('.form-navigation .next').toggle(!atTheEnd);
                $('.form-navigation [Type=submit]').toggle(atTheEnd);


                const step = document.querySelector('.step' + index);
                step.style.backgroundColor = "#17a2b8";
                step.style.color = "white";
            }

            function curIndex() {

                return $sections.index($sections.filter('.current'));
            }

            $('.form-navigation .previous').click(function() {
                navigateTo(curIndex() - 1);
            });

            $('.form-navigation .next').click(function() {
                $('.employee-form').parsley().whenValidate({
                    group: 'block-' + curIndex()
                }).done(function() {
                    navigateTo(curIndex() + 1);
                });

            });

            $sections.each(function(index, section) {
                $(section).find(':input').attr('data-parsley-group', 'block-' + index);
            });
            navigateTo(0);
        });
    </script>
</body>

</html>
