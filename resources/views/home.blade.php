@extends('master')

@section('mainSection')
  <div class="col-9 text-center">
    <div class="card">
        <div class="card-header bg-primary text-light">View Resume</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            You are logged in!
        </div>
    </div>
  </div>
@endsection

