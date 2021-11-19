<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>斯洛</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            .occupied
            {
                -webkit-filter:brightness(.5);
            }
        </style>
    </head>
    <body>

        <div class="album py-5 bg-light">
            <div class="container">
        
                <div class="row row-cols-2 row-cols-sm-2 row-cols-md-6 g-6">
                    @foreach ($Machines as $machine)
                        <div class="col">
                            <div class="card shadow-sm">

                                <div style= "position:relative ">
                                    <a href="{{$machine->ip}}">
                                    @if ($machine->status == 'off')
                                        <img class="card-img-top occupied" src="{{asset('uploads/'.$machine->image)}}" alt="Card image cap">
                                        <div style= "font-size:30px; position:absolute; left:30%; top:50%; color:#fff; font-weight:bold ">使用中</div> 
                                    @else
                                        <img class="card-img-top" src="{{asset('uploads/'.$machine->image)}}" alt="Card image cap">
                                    @endif
                                    </a>
                                </div>
                                
                                <div class="card-body">
                                <p class="card-text">{{$machine->name}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
