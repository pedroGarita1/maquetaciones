<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "class/dependencias.php";?>
    <title>Login</title>
</head>
<body class="bg-body">
    <?php require_once "view/navbar.php"?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 centro mt-4 fade-In-Down">
                <div class="card color-card" style="width: 18rem;">
                    <div class="card-body">
                        <div class="col-md-12 text-center">
                            <h5 class="card-title texto-blanco">USER</h5>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <form action="">
                                <div class="col-md-12 text-center mt-4">
                                    <label for="" class="texto-blanco" >Name</label>
                                </div>
                                <input type="text" class="form-control" placeholder="Your Name">
                                <div class="col-md-12 text-center">
                                    <label for="" class="texto-blanco mt-2">Password</label>
                                </div>
                                <input type="text" class="form-control" placeholder="Example: 1234">
                            </form>
                        </div>
                        <hr>
                        <button class="form-control color-boton texto-blanco">Login </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>