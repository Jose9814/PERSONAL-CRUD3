<!doctype html>
<html lang="es">

<head>
    <?php require_once("../../mainhead.php");  ?>
    <title>Mantenimiento de Producto</title>
</head>

<body>
    <!-- Left Panel -->
    <?php require_once("../../mainleftpanel.php"); ?>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <?php require_once("../../mainrightpanelhead.php"); ?>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <div class="col-md-12">
                <h4>Producto</h4>
                <hr>
                <p>Desde esta ventana podra dar mantenimiento a productos</p>
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Mantenimiento de Producto</strong>
                    </div>
                    <br>
                    <div class="col-md-12 text-center">
                        <button type="button" id="btnnuevo" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" data-target="#modalmantenimiento">
                            Agregar registro
                        </button>
                    </div>
                    <div class="card-body">
                        <table id="producto_data" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <?php require_once("../../mainfooter.php"); ?>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <?php require_once("modalmantenimiento.php"); ?>
    <?php require_once("../../mainjs.php"); ?>
    <script type="text/javascript" src="mntproducto.js"></script>
</body>

</html>