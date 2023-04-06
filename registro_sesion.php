<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/estilo01.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container p-4 my-3" style="border: 3px solid black">
        <div class="row m-3">
            <form action="">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="inputPassword5" class="form-label">Password</label>
                    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                    <div id="passwordHelpBlock" class="form-text">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>