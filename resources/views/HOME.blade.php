@extends('Layout')
@section('title','Table')
@section('css')
<link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>
<link href="https://getbootstrap.com/docs/4.5/examples/carousel/carousel.css" rel="stylesheet">
@endsection

@section('body')

<div class="container">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/img3.jpg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                <rect width="100%" height="100%" fill="#777" />
                </svg>
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1 class="text-white" style="font-family:verdana;">AMPLIA RED DE LABORATORIO</h1>
                        <P class="text-white" style="font-family:verdana;">CONTAMOS CON 6 SUCURSALES EN LA CIUDAD.</P>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/profesionales1.jpg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                <rect width="100%" height="100%" fill="#777" />
                </svg>
                <div class="container">
                    <div class="carousel-caption">
                        <h1 class="text-white" style="font-family:verdana;">PROFESIONALES DE ALTO NIVEL</h1>
                        <P class="text-white" style="font-family:verdana;">CONTAMOS CON PROFESIONALES COMPROMETIDOS CON LA SALUD.</P>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/img2.jpg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                <rect width="100%" height="100%" fill="#777" />
                </svg>
                <div class="container/img/img2.jpg">
                    <div class="carousel-caption text-right">
                        <h1 class="text-white" style="font-family:verdana;">ATENDEMOS LAS 24 HORAS</h1>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img src="/img/virus 3.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
                </svg>
                <h2>COVID-19</h2>
                <p>PREVENCIÓN :</p>
                <P>Lávate las manos con frecuencia. Usa agua y jabón o un desinfectante de manos a base de alcohol.</P>
                <P>Mantén una distancia de seguridad con personas que tosan o estornuden.</P>
                <P>Utiliza mascarilla cuando no sea posible mantener el distanciamiento físico.</P>
                <P>No te toques los ojos, la nariz ni la boca.</P>
                <P>Si no te encuentras bien, quédate en casa.</P>
                <P>En caso de que tengas fiebre, tos o dificultad para respirar, busca atención médica.</P>
            </div>
            <div class="col-lg-4">
                <img src="/img/virus 3.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
                </svg>
                <h2>SINTOMAS</h2>
                <p>Fiebre.</p>
                <p>Tos seca.</p>
                <p>Cansancio.</p>
                <p>Dolor de garganta.</p>
                <p>Dolor de cabeza.</p>
                <p>Pérdida del sentido del olfato o del gusto.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="/img/virus 3.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
                </svg>
                <h2>TIPOS DE PRUEBA</h2>
                <p>PRUEBA RCP.</p>
                <P>PRUEBA ANTIGENO.</P>
                <P>ELISA.</P>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Campaña de Prevención de la Diabetes.</h2>
                <p class="lead">Existen dos tipos de Diabetes, la 1, que tiene origen genético, y la Tipo 2, la más común, que está relacionada con los hábitos de vida como el sedentarismo y mala alimentación, ambos malos muy comunes en nuestro medio. La mejor manera de prevenir de Diabetes Tipo 2 es controlando y, manteniendo bajos los niveles de glucosa y colesterol en sangre.</p>
            </div>
            <div class="col-md-5">
                <img src="/img/Diabetes.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
                </svg>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Campaña de Prevención de Enfermedades Renales.</h2>
                <p class="lead">La mayoría de las enfermedades renales son asintomáticas, solo se manifiestan cuando el daño al riñón es irreversible y con graves consecuencias.
                    Las causas más comunes de enfermedad renal son la hipertensión y la diabetes. Mediante el control periódico del funcionamiento renal podemos prevenir estas enfermedades.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="/img/renal.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">campaña de prevención contra el Dengue, Chikungunya y Zika</h2>
                <p class="lead"></p>
            </div>
            <div class="col-md-5">
            <img src="/img/dengue.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="1000" height="1000" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
                </svg>
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
</div>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')
</script>
<script src="https://getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js
" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
@endsection