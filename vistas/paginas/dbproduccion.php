<?php

?>
<div class="content-wrapper" style="min-height: 717px;">

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">
                    <h1>Listado de Personal RRHH - Producción</h1>
            </div>

        </div><!-- /.container-fluid -->

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="row">

                <div class="col-12">

                    <!-- Default box -->
                    <div class="card card-info card-outline">

                        <div class="card-header">
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">

                            <table class="table table-bordered table-striped dt-responsive tablaUsuarios" width="100%">

                                <thead>

                                    <tr>

                                        <th style="width:10px">#</th>
                                        <th>Codigo General</th>
                                        <th>Nro. Documento</th>
                                        <th>Nombres</th>
                                        <th>Fec. Nacimiento</th>
                                        <th>Sexo</th>
                                        <th>Acción</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <?php  ?>
                                    <?php
                                    $respuesta = ctrPersonal::ctrMostrarListadoProduccion();
                                    //foreach($usuarios as $key => $value){
                                    foreach ($respuesta as $key => $value) {
                                        $datos = $value["IDCODIGOGENERAL"];
                                    ?>

                                        <tr>
                                            <td style="width:10px"><?php ($key + 1); ?></td>
                                            <td><?php echo $value["IDCODIGOGENERAL"]; ?></td>
                                            <td><?php echo $value["NRODOCUMENTO"]; ?></td>
                                            <td><?php echo $value["APENOM"]; ?></td>
                                            <td><?php echo $value["FECHA_NACIMIENTO"]; ?></td>
                                            <td><?php echo $value["SEXO"]; ?></td>
                                            <td>
                                                <button  type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-agregar-usuario">
                                                Agregar
                                                </button>
                                            </td>
                                        </tr>
                                        <script>
                                            function agregar(datos) {

                                            }
                                        </script>
                                        <!--=====================================
                                            Modal Agregar usuarios
                                            ======================================-->

                                        <div class="modal fade" id="modal-agregar-usuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
                                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Confirmar el registro del Personal <?php echo $value["APENOM"] . " con Nro de Documento ". $value["NRODOCUMENTO"]; ?>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <button type="button" class="btn btn-success">Confirmar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        </form>
                        

            <?php
                                        //    }
                                    }

            ?>


            </tbody>

            </table>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">

            </div>
            <!-- /.card-footer-->

        </div>
        <!-- /.card -->

</div>

</div>

</div>

</section>


</div>


<!--=====================================
Modal EDITAR usuarios
======================================-->
<div class="modal modal-default fade" id="modal-editar-usuarios">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="alert alert-success alert-dismissible ">editar usuario</h4>
            </div>
            <form method="post" enctype="multipart/form-data">

                <div class="form-group has-feedback" bis_skin_checked="1">
                    <input type="hidden" id="idPerfilE" name="idPerfilE">
                    <input type="text" class="form-control" id="nom_usuariosE" name="nom_usuariosE" placeholder="nombre">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback" bis_skin_checked="1">
                    <input type="text" class="form-control" id="nom_userE" name="nom_userE" placeholder="usuario">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback" bis_skin_checked="1">
                    <input type="hidden" id="pass_userActualE" name="pass_userActualE">
                    <input type="password" class="form-control" id="pass_userE" name="pass_userE" placeholder="password">
                    <span class="glyphicon glyphicon-eye-close form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback" bis_skin_checked="1">
                    <div class="btn btn-default btn-file" bis_skin_checked="1">
                        <i class="fas fa-paperclip"></i> Adjuntar Imagen de usuarios
                        <input type="file" name="subirImgusuariosE">
                    </div>
                    <input type="hidden" id="fotoActualE" name="fotoActualE">
                    <img class="previsualizarImgusuarios img-fluid py-2" width='200' height='200'>
                    <p class="help-block small"> Dimensiones: 480px * 382px | Peso Max. 2MB | Formato: JPG o PNG</p>
                </div>

                <div class="form-group has-feedback">


                    <label>rol</label>
                    <select class="form-control" name="rol_userE" required>



                    </select>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">cerrar</button>
                    <button type="submit" class="btn btn-primary">editar</button>
                </div>

                <?php


                ?>


            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>