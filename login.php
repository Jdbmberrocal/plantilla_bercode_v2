<!DOCTYPE html>
<html>

<head>
    <title>Iniciar Sesion</title>
    <!--Made with love by Mutiullah Samim -->
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="assets/css/fonts.min.css">
    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header text-center">
                    <h5><a href="index.php" class="text-white"><span><i class="icon-home"></i></span> - Inicio</a></h5>                    
                </div>
                <div class="card-body">
                    <form>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text text-white"><i class="icon-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Usuario">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text text-white"><i class="icon-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Contraseña">
                        </div>
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label text-white" for="customCheck1">Recordar Contraseña</label>
                        </div>
                        <div class="input-group form-group justify-content-center">
                            <input type="submit" value="Ingresar" class="btn login_btn text-white">
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="text-white ">Olvido su Contraseña?</a>
                </div>
            </div>
        </div>
    </div>
    <?php require('include/script.php'); ?>
</body>

</html>