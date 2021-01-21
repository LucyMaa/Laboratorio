<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <!-- BOOTSTRAP CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
    <!--<link rel="stylesheet" href="styles.css">-->
</head>

<body>

    <style>
    body, html {
    height: 100%;
    padding: 0;
    margin: 0;
}

body {
    background: linear-gradient(rgba(20, 114, 20,0.8), rgba(45,200,200	,0.7)),url("img/bg.jpg");
    background-size: cover;
    background-position: center;
    color: #fff;
}

.logo {
    height: 40px;
    margin-top: 20px;
}

.text-description {
    letter-spacing: 2px;
    font-family: sans-serif;
}

.form-control {
    background: transparent !important;
    color: #fff !important;
}

a .fab {
    color: #ffc;
    font-size: 30px;
    margin: 0 10px;
}

.nav-link{
    color: #ffffff;
}
    </style>

    <header class="container">
        <div class="row">
            <div class="col-sm-12 my-4">
                <a href="index.html mt-4">
                    <img src="" class="logo"> <!--img/logo.png-->
                </a>
                <h1 class="text-center display-3 text-uppercase font-weight-bold mt-4">Laboratorio</h1>
            </div>
            <div class="col-sm-6">
                <img src="img/right-laptop.jpg" class="img-fluid">
            </div>
            <div class="col-sm-6 text-center">
                <p class="text-center text-description">Centro especializado de analisis de laboratorio, atencion las 24hrs los 7 días de la semana, los 365 días del año.</p>

				<p class="text-center text-description">¡Consultas gratuitas!</p>
				<form action="index.html">
                    <!--<input class="form-control rounded-0 my-4 text-center" type="email" name="Write your Email"
                        placeholder="Enter your email"> -->
					<button type="submit" class="btn btn-secondary">
                    <a class="nav-link" href="login" >Ingresar</a>
                    </button>
                    <button type="submit" class="btn btn-info">
                    <a class="nav-link" href="register">Registrarse</a>
                    </button>


                </form>
                <ul class="list-unstyled list-inline mt-4">
                    <li class="list-inline-item">
                        <a href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

</body>

</html>
