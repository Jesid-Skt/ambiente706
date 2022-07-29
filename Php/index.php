<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <div class="container-fluid">
        <div class="wraper w-100 vh-100 col-6 d-flex justify-content-center align-items-center">
            <form class="col-6" action="php/funciones.php" method="post">
                <div class="row col-12">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" name="nombres" class="form-control col-12">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Apellidos</label>
                            <input type="text" name="apellidos" class="form-control col-12">
                        </div>
                       
                        <div class="row mt-1">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="" class="form-label">Nota 1</label>
                                    <input type="number" name="calificacion_1" class="form-control col-12">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="" class="form-label">Nota 2</label>
                                    <input type="number" name="calificacion_2" class="form-control col-12">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="" class="form-label">Nota 3</label>
                                    <input type="number" name="calificacion_3" class="form-control col-12">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <select name="opcion">
                                        <option value="1">suma</option>
                                        <option value="2">resta</option>
                                        <option value="3">multiplicacion</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" value="Enviar" class="btn btn-success col-6">
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>