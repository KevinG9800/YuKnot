<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Fotos</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/estilo01.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row p-3 m-4 w-80%">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/example1.webp" class="d-block w-100" alt="ex1" width="100%" height="100%">
                    </div>
                    <div class="carousel-item">
                        <img src="img/example2.jpeg" class="d-block w-100" alt="ex2" width="100%" height="100%">
                    </div>
                    <div class="carousel-item">
                        <img src="img/example3.jpeg" class="d-block w-100" alt="ex3" width="100%" height="100%">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>