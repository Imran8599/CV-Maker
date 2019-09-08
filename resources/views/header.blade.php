<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Angular Js CDN link-->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script> --}}
    <style>
      input.ng-invalid.ng-touched,textarea.ng-invalid.ng-touched{
          border: 1px solid #DA3637;
      }
      input.ng-valid.ng-touched,textarea.ng-valid.ng-touched{
          border: 1px solid #509D12;
      }
    </style>
    <title>CV Maker</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('public/img/cv.jpg')}}"/>
  </head>
  <body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="{{ url('/') }}">CV Maker</a><small class="text-light offset-1">&copy; Design & Develop By <strong>Imran Ahamed</strong></small>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}"><i class="fa fa-home pr-1" style="font-size:18px;"></i>Home</a>
            </li>


            <!-- Authentication Links -->
            @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-sign-in pr-1" style="font-size:18px;"></i>LogIn</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}"><i class="fa fa-sign-in pr-1" style="font-size:18px;"></i>SignUp</a>
              </li>
            @else
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-user pr-1" style="font-size:18px;"></i>{{ Auth::user()->name }}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pr-1" style="font-size:18px;"></i>LogOut</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </li>
            @endguest

            <li class="nav-item">
              <a class="nav-link" href="#">Help</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            
          </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
              <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action {{Request::is('/')? 'active' : ""}}" href="{{ url('/') }}"><i class="fa fa-home pr-1" style="font-size:18px;"></i>Home</a>
                <a class="list-group-item list-group-item-action {{Request::is('home*')? 'active' : ""}}" href="{{ url('/home') }}"><i class="fa fa-eye pr-1" style="font-size:18px;"></i>View Resume</a>
                <a class="list-group-item list-group-item-action {{Request::is('edit*')? 'active' : ""}}" href="{{ url('edit')}}"><i class="fa fa-edit pr-1" style="font-size:18px;"></i>Edit Resume</a>
                <a class="list-group-item list-group-item-action {{Request::is('demo*')? 'active' : ""}}" href="{{ url('demo')}}"><i class="fa fa-copy pr-1" style="font-size:18px;"></i>Demo</a>
                <a class="list-group-item list-group-item-action {{Request::is('download*')? 'active' : ""}}" href="{{url('download')}}"><i class="fa fa-download pr-1" style="font-size:18px;"></i>Download PDF</a>
                <a class="list-group-item list-group-item-action {{Request::is('print*')? 'active' : ""}}" href="{{url('print')}}"><i class="fa fa-print pr-1" style="font-size:18px;"></i>Print</a>
              </div>
            </div>