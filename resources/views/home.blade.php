@extends('layouts.app')

@section('content')


<style>
    body, html {
    height: 100%;
    }

    .bg {
    /* The image used */
    background-image: linear-gradient(
      rgba(0, 0, 0, 0.7), 
      rgba(0, 0, 0, 0.7)
    ),url("https://previews.123rf.com/images/leksustuss/leksustuss1912/leksustuss191200034/134819842-golden-slot-machine-wins-the-jackpot-777-on-the-background-of-an-explosion-of-coins-vector-illustrat.jpg");

    /* Full height */
    height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    }
</style>

<div class="container bg">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
