<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cadastro Cliente - Le Flower</title>
    <meta name="description" content="Fitmas - Gym & Fitness HTML Template">
    <meta name="keywords" content="Fitmas - Gym & Fitness HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/logo.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/logo.png') }}">
    <meta name="theme-color" content="#ffffff">

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com') }}">
    <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com') }}" crossorigin>
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700;800&family=Kumbh+Sans:wght@300;400;500;600;700&display=swap') }}" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.min.css' ) }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.min.css') }}">
    <!-- Flip Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.flipster.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

</head>

<style>
    .header-top{
        height: 90px;
    }

    .header-top nav{
        align-items: center;
        align-content: center;
        justify-content: center;
        text-align: center;
    }

    .header-top nav img{
        width: 100px;
    }

    .hero-wrapper{
        height: 1000px;
        width: 1920px;
    }

    .hero-3:after {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    background: linear-gradient(to right, rgba(0,0,0,0.9), transparent);
    mix-blend-mode: hard-light;
    }
</style>

<body>

        <header class="nav-header header-layout2">
            <div class="header-top d-lg-block d-none">
                <nav>
                    <a href="/"><img src="{{ asset('assets/logo.png') }}" alt="Le Flower"></a>
                </nav>
            </div>
        </header>

            <div class="hero-wrapper hero-3 background-image" id="hero" style="background-image: url(&quot;assets/banner/bannerFlores.jpeg&quot;);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="hero-style3">
                                <h1 class="hero-title text-white">REDEFINE YOUR LIMITS, EMBRACE THE JOURNEY.</h1>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="appointment-form bg-white">
                                <h4 class="form-title">Cadastrando:</h4>
                                <form action="javascript:void"
                                method="POST" class="bmi-form ajax-contact">
                                @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control style-border2" name="nomeUsuario" id="nomeUsuario" placeholder="Nome Completo">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control style-border2" name="senhaUsuario" id="senhaUsuario" placeholder="Senha">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control style-border2" name="emailUsuario" id="emailUsuario" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control style-border2" name="telefoneUsuario" id="telefoneUsuario" placeholder="Telefone">
                                    </div>
                                    <div class="form-btn col-12">
                                        <button onclick="cadastrarClientesForm()" id="btnEnviarFormUser" class="btn fw-bold style5 w-100">MAKE APPOINTMENT</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <!-- Flip Slider -->
    <script src="{{ asset('js/jquery.flipster.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('js/bmi.calculator.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/scriptCadastro.js') }}"></script>
    <script src="../index.js"></script>
    <script src="..index.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const darkModeToggle = document.getElementById('darkModeToggle');
            const body = document.body;

            // Evento de mudança no botão de alternância do modo escuro
            darkModeToggle.addEventListener('change', function () {
                body.classList.toggle('dark-mode', darkModeToggle.checked);
                localStorage.setItem('darkMode', darkModeToggle.checked);
            });

            // Verificar e aplicar o estado do modo escuro ao carregar a página
            const savedDarkMode = localStorage.getItem('darkMode') === 'true';
            darkModeToggle.checked = savedDarkMode;
            body.classList.toggle('dark-mode', savedDarkMode);
        });
        </script>


</body>
</html>
