<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Welcome  @if(Auth::guest())
            Guest
        @else
            {{ Auth::user()->name }}

        @endif </title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset("vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset("vendor/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{asset("css/clean-blog.min.css")}}" rel="stylesheet">

</head>

<body>

<!-- Navigation -->


<nav class="bg bg-secondary navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">




    <div class="container">
        <a class="navbar-brand" href="/">Sezer Esim Blog</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="post.html">Sample Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
                @if(Auth::guest())
                    <li><a href="/login" class="nav-link"><i class="fa fa-sign-in"></i> Üye Girişi</a></li>
                    <li><a href="/register" class="nav-link"><i class="fa fa-users"></i> Üye Ol</a></li>
                @endif
            </ul>

        </div>
        @if(!Auth::guest())
        <div class="dropdown">

            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <a href="/"><i class="fa fa-home"></i> {{ Auth::user()->name }}</a>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li class="dropdown">

                @if(Auth::user()->yetkisi_var_mi("admin"))
                            <a href="{{ url('/site-ayarlari') }}" class="dropdown-item"><i class="fa fa-btn fa-wrench"></i>Site Ayarları</a>
                            <a href="{{ url('/user') }}"class="dropdown-item"><i class="fa fa-btn fa-users"></i>Kullanıcılar</a>
                            <a href="{{ url('/kategori') }}"class="dropdown-item"><i class="fa fa-btn fa-cube"></i>Kategoriler</a>
                            <a href="{{ url('/makale') }}"class="dropdown-item"><i class="fa fa-btn fa-list-ol"></i>Tüm Makaleler</a>
                            <a href="{{ url('/talep') }}"class="dropdown-item"><i class="fa fa-btn fa-envelope-o"></i>Yazarlık Talepleri</a>
                        <div class="dropdown-divider"></div>
                        @endif
                        @if(Auth::user()->yetkisi_var_mi("author"))
                            <a href="{{ url('/makalem') }}"class="dropdown-item"><i class="fa fa-btn fa-list"></i>Makalelerim</a>
                            <a href="{{ url('/makalem/create') }}"class="dropdown-item"><i class="fa fa-btn fa-plus"></i>Yeni Makale Ekle</a>
                        @endif
                        @if(!Auth::user()->yetkisi_var_mi("admin") && !Auth::user()->yetkisi_var_mi("author"))
                            <a href="{{ url('/yazarlik-talebi') }}"class="dropdown-item"><i class="fa fa-btn fa-envelope"></i>Yazarlık Talebi</a>
                        @endif
                    <div class="dropdown-divider"></div>
                        <a href="{{ url('/logout') }}"class="dropdown-item"><i class="fa fa-btn fa-sign-out"></i>Çıkış</a>




                </li>
            </div>

        </div>@endif

    </div>
</nav>



@yield('content')


<!-- Footer -->
<hr>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset("vendor/jquery/jquery.min.js")}}"></script>
<script src="{{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

<!-- Custom scripts for this template -->
<script src="{{asset("js/clean-blog.min.js")}}"></script>

</body>

</html>