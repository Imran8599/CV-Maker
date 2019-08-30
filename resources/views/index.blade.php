@extends('master')

@section('mainSection')
  <div class="col-9 text-center mt-5 pt-5">
    <h1 class="display-2 text-primary"><span id="ityped"></span></h1>
    <h1 class="display-2 font-weight-bold">
        <span class="text-success" id="hour"></span>:<span class="text-success" id="minute"></span>:<span class="text-success" id="second"></span>
        <span class="text-danger" id="ampm"></span></h1>
  </div>
@endsection
            
        