<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Physmach Technologies</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.v4.0.0.min.css') }}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="">
      
    </head>
   <body>
 <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="">Telthem</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="navbar-nav float-sm-right">
           <li class="nav-item">
            <a class="nav-link" href="/todos">Todo</a>
          </li>
         <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
            <li class="nav-item dropdown">
          
            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>
           
            <div class="dropdown-menu" aria-labelledby="dropdown03">
              <a class="dropdown-item" href="#">Change Password</a>
              <a class="dropdown-item" href="">Logout</a>
              
            </div>
          </li>
        </ul>
      </div>
    </nav>
        <div class="jumbotron text-center">
            <h3 class="display-3">Telthem Technologies</h3>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="m-y-md">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
              {{ Session::get('success') }}
            </div>
            @endif
        </div>
   <div class="container">
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                   
                 @yield('content')
                </div>
            </div>
        </div>
   </div>
   <!-- Scripts -->
    <!--   Core JS Files    -->
    <script src ="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
     <script src ="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
   </body>
   </html>
