<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">LogOut</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">LogIn</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">SignUp</a>
            </li>
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
                <a class="list-group-item list-group-item-action active" href="{{ url('/') }}">Home</a>
                <a class="list-group-item list-group-item-action" href="{{ url('/home') }}">View Resume</a>
                <a class="list-group-item list-group-item-action" href="">Edit Resume</a>
                <a class="list-group-item list-group-item-action" href="#">Download PDF</a>
                <a class="list-group-item list-group-item-action" href="#list-settings">Print</a>
              </div>
            </div>